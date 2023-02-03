<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\Categories\StoreFormRequest;
use Modules\Admin\Repositories\CategoryRepository;
use Modules\Admin\Repositories\ProductRepository;

class CategoryController extends Controller
{
    private CategoryRepository $categoryRepository;
    private ProductRepository $productRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Màn hình danh sách thể loại
     */
    public function index()
    {
        $categories = $this->categoryRepository->paginate();

        return view('admin::category.index', compact(
            'categories'
        ));
    }

    /**
     * Màn hình thêm thể loại
     */
    public function add(StoreFormRequest $request)
    {
        if ($request->isMethod('post')) {
            $params = $request->only(['name']);
            try {
                $result = $this->categoryRepository->add($params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Success !',
                ];
                $targetRoute = redirect()->route('admin.category.index');
            } catch (\Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Failure !',
                ];
                $targetRoute = back();
                Log::debug($exception->getMessage());
            }
            notification_message_settings($notification['status'], $notification['title'], $params['name']);
            return $targetRoute;
        }

        return view('admin::category.add_category');
    }

    public function update(Request $request, int $id)
    {
        $category = $this->categoryRepository->first($id);
        if ($request->isMethod('post')) {
            $params = $request->only(['name']);
            try {
                $result = $this->categoryRepository->update(['id' => $id], $params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Success !',
                ];
                $targetRoute = redirect()->route('admin.category.index');
            } catch (\Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Failure !',
                ];
                $targetRoute = back();
                Log::debug($exception->getMessage());
            }
            notification_message_settings($notification['status'], $notification['title'], $params['name']);
            return $targetRoute;
        }

        return view('admin::category.update', compact(
            'category'
        ));
    }

    /**
     * Màn hình xóa thể loại
     */
    public function delete(int $category_id)
    {
        try {
            $this->categoryRepository->physicalDelete($category_id);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Success !',
            ];
        } catch (\Exception $exception) {
            $notification = [
                'status' => NOTIFICATION['danger'],
                'title' => 'Failure !',
            ];
        }
        notification_message_settings($notification['status'], $notification['title']);
        return back();
    }

    public function listOfProducts(Request $request, $category_id)
    {
        $params['name'] = $request->input('name', null);
        $params['category_id'] = $request->input('category_id', null);
        $category = $this->categoryRepository->first($category_id);
        $products = $this->productRepository->paginate();

        return view('admin::category.list_product', compact(
            'params',
            'category',
            'products',
        ));
    }

    public function addNewProducts(Request $request, $category_id)
    {
        $auth = Auth::user();
        $category = $this->categoryRepository->first($category_id);
        $params['category_id'] = $category->id;

        if ($request->isMethod('post')) {
            $params = $request->only(['name', 'original_price', 'promotional_price', 'posts']);
            $params['account_id'] = $auth->id;
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
                return redirect()->route('admin.category.product.list', ['category_id' => $category->id]);
            } catch (\Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Thất bại !',
                ];
                $message = $exception->getMessage();
                dd($message);
                error_logging(__FILE__, __LINE__, $message);
            }

            notification_message_settings($notification['status'], $notification['title'], $params['name']);
        }

        return view('admin::category.add_product', compact(
            'category',
            'params'
        ));
    }
}
