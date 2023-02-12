<?php

namespace Modules\Admin\Http\Services;

use Modules\Admin\Http\Repositories\CategoryRepository;

class ProductService
{
    private CategoryRepository $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function paginate(): object
    {
        return $this->categoryRepository->paginate();
    }

    public function list(array $conditions = [])
    {
        return $this->categoryRepository->list();
    }
}
