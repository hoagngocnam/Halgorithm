<?php

namespace Modules\Users\Repositories;

use App\Models\Account;
use Modules\Admin\Http\Repositories\Interfaces\AccountRepositoryInterface;

class AccountRepository extends BaseRepository implements AccountRepositoryInterface
{
    protected $model;

    public function __construct(Account $model)
    {
        $this->model = $model;
    }
}
