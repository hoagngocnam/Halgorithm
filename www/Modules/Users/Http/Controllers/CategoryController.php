<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Users\Http\Repositories\CategoryRepository;
use Modules\Users\Http\Repositories\ProductRepository;

class CategoryController extends Controller
{
    private CategoryRepository $categoryRepository;
    private ProductRepository $productRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository  $productRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Màn hình Home
     */
    public function index()
    {
        $categories = $this->categoryRepository->list();
        $products = $this->productRepository->list();

        return view('users::category.index', compact(
            'categories',
            'products'
        ));
    }
}
