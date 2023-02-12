<?php

namespace Modules\Admin\Http\Services;

use App\Models\Category;
use Modules\Admin\Http\Repositories\CategoryRepository;

class CategoryService
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

    public function add(array $params): object
    {
        return $this->categoryRepository->add($params);
    }

    public function first(int $id): object
    {
        return $this->categoryRepository->first($id);
    }

    public function update(int $id, $params): bool
    {
        return $this->categoryRepository->update($id, $params);
    }

    public function logicDelete(int $id): bool
    {
        return $this->categoryRepository->logicDelete($id);
    }
}
