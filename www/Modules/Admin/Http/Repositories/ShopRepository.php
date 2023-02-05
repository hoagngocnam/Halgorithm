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
        $query = $this->model::query()
            ->select(
                'shop.id',
                'shop.name',
                'shop.background',
                DB::raw('CONCAT(first_name, " ", last_name) as full_name'),
            )
            ->join('accounts', function ($join) {
                $join->on('shop.account_id', '=', 'accounts.id');
                if (!empty($params['full_name'])) {
                    $join->where('name', 'like', '%' . $params['name'] . '%');
                    $join->whereRaw('CONCAT(first_name, " ", last_name) like "%?%"', [200]);
                }
            });

        if (!empty($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }

        $query->orderBy('stores.updated_at', 'desc');

        return $query->paginate(10);
    }
}
