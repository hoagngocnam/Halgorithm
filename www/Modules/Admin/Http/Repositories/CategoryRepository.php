<?php

namespace Modules\Admin\Http\Repositories;

use App\Models\Category;
use Modules\Admin\Http\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
