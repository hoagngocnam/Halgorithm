<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\Categories\{AddRequest, FindRequest, UpdateRequest};
use Modules\Admin\Http\Services\CategoryService;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function list(FindRequest $request): Renderable
    {
        $categories = $this->categoryService->paginate();

        return view('admin::category.list', compact(
            'categories'
        ));
    }

    public function add(): Renderable
    {
        return view('admin::category.add');
    }

    public function handleAdd(AddRequest $request)
    {
        $params = $request->only(['name']);
        try {
            $result = $this->categoryService->add($params);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Success !',
            ];
            $targetRoute = redirect()->route('admin.category.list');
        } catch (Exception $exception) {
            $notification = [
                'status' => NOTIFICATION['danger'],
                'title' => 'Failure !',
            ];
            $targetRoute = back();
            dd($exception->getMessage());
        }
        notification_message_settings($notification['status'], $notification['title'], $params['name']);
        return $targetRoute;

    }

    public function update(UpdateRequest $request, int $id): Renderable
    {
        $category = $this->categoryService->first($id);
        return view('admin::category.update', compact(
            'category'
        ));
    }

    public function handleUpdate(UpdateRequest $request)
    {
        $params = $request->only(['name']);
        try {
            $result = $this->categoryService->update(['id' => $id], $params);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Success !',
            ];
            $targetRoute = redirect()->route('admin.category.list');
        } catch (Exception $exception) {
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

    /**
     * Màn hình xóa thể loại
     */
    public function delete(int $category_id)
    {
        try {
            $this->categoryService->physicalDelete($category_id);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Success !',
            ];
        } catch (Exception $exception) {
            $notification = [
                'status' => NOTIFICATION['danger'],
                'title' => 'Failure !',
            ];
        }
        notification_message_settings($notification['status'], $notification['title']);
        return back();
    }

//    public function listOfProducts(Request $request, $category_id)
//    {
//        $params['name'] = $request->input('name', null);
//        $params['category_id'] = $request->input('category_id', null);
//        $category = $this->categoryService->first($category_id);
//        $products = $this->productRepository->paginate();
//
//        return view('admin::category.list_product', compact(
//            'params',
//            'category',
//            'products',
//        ));
//    }

//    public function addNewProducts(Request $request, $category_id)
//    {
//        $auth = Auth::user();
//        $category = $this->categoryService->first($category_id);
//        $params['category_id'] = $category->id;
//
//        if ($request->isMethod('post')) {
//            $params = $request->only(['name', 'original_price', 'promotional_price', 'posts']);
//            $params['account_id'] = $auth->id;
//            $picture = $request->file('picture');
//            if (!empty($picture)) {
//                $pictureLink = 'products/' . $picture->hashName();
//                $picture->store('products');
//                $params['picture'] = $pictureLink;
//            }
//            try {
//                $product = $this->productRepository->add($params);
//                $notification = [
//                    'status' => NOTIFICATION['success'],
//                    'title' => 'Thành công !',
//                    'message' => $params['name']
//                ];
//                return redirect()->route('admin.category.product.list', ['category_id' => $category->id]);
//            } catch (Exception $exception) {
//                $notification = [
//                    'status' => NOTIFICATION['danger'],
//                    'title' => 'Thất bại !',
//                ];
//                $message = $exception->getMessage();
//                dd($message);
//                error_logging(__FILE__, __LINE__, $message);
//            }
//
//            notification_message_settings($notification['status'], $notification['title'], $params['name']);
//        }
//
//        return view('admin::category.add_product', compact(
//            'category',
//            'params'
//        ));
//    }
}
