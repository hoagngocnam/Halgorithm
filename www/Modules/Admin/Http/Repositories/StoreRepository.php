<?php

namespace Modules\Admin\Repositories;

use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Modules\Admin\Repositories\Interfaces\StoreRepositoryInterface;

class StoreRepository extends BaseRepository implements StoreRepositoryInterface
{
    protected $model;

    public function __construct(Store $model)
    {
        $this->model = $model;
    }

    public function paginate(array $params = []): object
    {
        $query = $this->model::query()
            ->select(
                'stores.id',
                'stores.name',
                'stores.background',
                DB::raw('CONCAT(first_name, " ", last_name) as full_name'),
            )
            ->join('accounts', function ($join) {
                $join->on('stores.account_id', '=', 'accounts.id');
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
