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
}
