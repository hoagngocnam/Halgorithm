<?php

namespace Modules\Users\Repositories;

use App\Models\Author;
use Modules\Admin\Repositories\Interfaces\AuthorRepositoryInterface;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{
    protected $model;

    public function __construct(Author $model)
    {
        $this->model = $model;
    }
}
