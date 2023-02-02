<?php

namespace Modules\Users\Repositories;

use App\Models\Store;
use Modules\Admin\Repositories\Interfaces\StoreRepositoryInterface;

class StoreRepository extends BaseRepository implements StoreRepositoryInterface
{
    protected $model;

    public function __construct(Store $model)
    {
        $this->model = $model;
    }
}
