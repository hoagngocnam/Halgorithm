<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Http\Repositories\CategoryRepository;
use Modules\Users\Http\Repositories\ProductRepository;

class ProductController extends Controller
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
     * Màn hình Sản phẩm
     */
    public function index(Request $request, $category_id, $product_id)
    {
        $categories = $this->categoryRepository->list();
        $product = $this->productRepository->first($product_id);

        return view('users::product.index', compact(
            'categories',
            'product'
        ));
    }
}
