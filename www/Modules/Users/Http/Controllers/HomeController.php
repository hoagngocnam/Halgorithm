<?php

namespace Modules\Users\Http\Controllers;

use App\Jobs\SendMailReminder;
use App\Models\Category;
use Illuminate\Routing\Controller;
use Modules\Users\Http\Repositories\{CategoryRepository, ProductRepository, ShopRepository};

class HomeController extends Controller
{
    private ShopRepository $storeRepository;
    private CategoryRepository $categoryRepository;
    private ProductRepository $productRepository;

    public function __construct(
        ShopRepository     $storeRepository,
        CategoryRepository $categoryRepository,
        ProductRepository  $productRepository
    ) {
        $this->storeRepository = $storeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Màn hình Home
     */
    public function index()
    {
        $categories = Category::all();
        $categories->load('products');
        return view('users::home.index', compact(
            'categories'
        ));
        SendMailReminder::dispatch();
        die;
        $stores = $this->storeRepository->list();
        $stores->load(['products' => function ($query) {
            $query->select([
                'store_id',
                'id as product_id',
                'category_id',
                'name',
                'original_price',
                'promotional_price',
                'rating',
                'picture',
                'is_exclusive',
            ]);
        }]);
        $categories = $this->categoryRepository->list();

        return view('users::home.index', compact(
            'stores',
            'categories'
        ));
    }
}
