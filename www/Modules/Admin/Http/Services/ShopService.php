<?php

namespace Modules\Admin\Http\Services;

use App\Models\Shop;
use Modules\Admin\Http\Repositories\AccountRepository;
use Modules\Admin\Http\Repositories\ShopRepository;

class ShopService
{
    private ShopRepository $shopRepository;


    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function paginate(): object
    {
        return $this->shopRepository->paginate();
    }

    public function add(array $params): Shop
    {
        return $this->shopRepository->add($params);
    }

    public function first(int $id): Shop
    {
        return $this->shopRepository->first($id);
    }

    public function update(int $id, $params): bool
    {
        return $this->shopRepository->update($id, $params);
    }

    public function logicDelete(int $id): bool
    {
        return $this->shopRepository->logicDelete($id);
    }
}
