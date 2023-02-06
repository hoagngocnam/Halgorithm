<?php

namespace Modules\Admin\Http\Repositories;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Http\Repositories\Interfaces\ShopRepositoryInterface;

class ShopRepository extends BaseRepository implements ShopRepositoryInterface
{
    protected $model;

    public function __construct(Shop $model)
    {
        $this->model = $model;
    }

    public function paginate(array $params = []): object
    {
        $query = $this->model::query();

        if (!empty($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }

        $query->orderBy('shops.updated_at', 'desc');
        $query->with('owner');

        return $query->paginate(10);
    }
}
