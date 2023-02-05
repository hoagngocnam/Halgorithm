<?php

namespace Modules\Users\Http\Repositories;

use App\Models\Shop;
use Modules\Admin\Http\Repositories\Interfaces\ShopRepositoryInterface;

class ShopRepository extends BaseRepository implements ShopRepositoryInterface
{
    protected $model;

    public function __construct(Shop $model)
    {
        $this->model = $model;
    }
}
