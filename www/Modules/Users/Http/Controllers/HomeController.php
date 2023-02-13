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
        $stores = $this->storeRepository->list();
        $categories = $this->categoryRepository->list();

        return view('users::home.index', compact(
            'stores',
            'categories'
        ));
    }
}
