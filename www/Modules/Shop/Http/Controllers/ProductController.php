<?php

namespace Modules\Shop\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Repositories\{CategoryRepository, ChapterRepository, ProductRepository,};

class ProductController extends Controller
{
    private CategoryRepository $categoryRepository;
    private ProductRepository $productRepository;
    private ChapterRepository $chapterRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        ChapterRepository $chapterRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->chapterRepository = $chapterRepository;
    }

    /**
     * Màn hình danh sách sản phẩm
     */
    public function index(ProductRequest $request)
    {
        $categories = $this->categoryRepository->list();
        $products = $this->productRepository->paginate();
        $params['name'] = $request->input('name', null);
        $params['category_id'] = $request->input('category_id', null);

        return view('admin::product.index', compact(
            'params',
            'categories',
            'products',
        ));
    }

    /**
     * Màn hình thêm sản phẩm
     */
    public function add(ProductRequest $request)
    {
        $auth = Auth::user();
        $categories = $this->categoryRepository->list();
        $params['category_id'] = $request->input('category_id', null);
        $categoryIds = [];

        if ($request->isMethod('post')) {
            $params = $request->only(['category_id', 'name', 'original_price', 'promotional_price', 'posts']);
            $params['account_id'] = 1;
            $categoryIds = $request->input('category_id', []);
            $picture = $request->file('picture');
            if (!empty($picture)) {
                $pictureLink = 'products/' . $picture->hashName();
                $picture->store('products');
                $params['picture'] = $pictureLink;
            }
            try {
                $product = $this->productRepository->add($params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Thành công !',
                    'message' => $params['name']
                ];
                $redirect = redirect()->route('admin.product.index');
            } catch (\Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Thất bại !',
                ];
                $redirect = back()->withInput();

                $message = $exception->getMessage();
                error_logging(__FILE__, __LINE__, $message);
                dd($message);
            }

            notification_message_settings($notification['status'], $notification['title'], $params['name']);

            return $redirect;
        }

        return view('admin::product.add', compact(
            'categories',
            'params',
            'categoryIds'
        ));
    }

    /**
     * Màn hình chỉnh sửa sản phẩm
     */
    public function update(ProductRequest $request, int $id)
    {
        $categories = $this->categoryRepository->list();
        $product = $this->productRepository->first($id);

        if ($request->isMethod('post')) {
            $params = $request->only(['name']);
            $categoryIds = $request->input('category_id', []);
            $picture = $request->file('picture');
            if (!empty($picture)) {
                $pictureLink = 'uploads/products/' . $picture->hashName();
                $picture->store('uploads/products');
                Storage::delete($product->picture);
                $params['picture'] = $pictureLink;
            }
            // try {
            $result = $this->productRepository->update(['id' => $id], $params);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Thành công !',
                'message' => $params['name']
            ];
            return redirect()->route('admin.product.index');
            // } catch (\Exception $exception) {
            $notification = [
                'status' => NOTIFICATION['danger'],
                'title' => 'Thất bại !',
            ];
            // $message = $exception->getMessage();
            // error_logging(__FILE__, __LINE__, $message);
            // }
        }

        return view('admin::product.update', compact(
            'categories',
            'product',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, int $id)
    {
        $product = $this->productRepository->logicDelete($id);

        return redirect()->route('admin.product.index');
    }

    public function chapterContent(Request $request, int $product_id, int $chapter_id)
    {
        $product = $this->productRepository->first(['id' => $product_id]);
        $chapter = $this->chapterRepository->first(['id' => $chapter_id]);
        $chapterContents = $this->chapterRepository->content(['id' => $chapter_id]);

        return view('admin::product.chapter-content', compact(
            'product',
            'chapter',
            'chapterContents'
        ));
    }
}
