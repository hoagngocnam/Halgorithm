<?php

namespace Modules\Admin\Http\Services;


use Modules\Admin\Http\Repositories\AccountRepository;

class AccountService
{
    private AccountRepository $accountRepository;

    /**
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    public function paginate(): object
    {
        return $this->accountRepository->paginate();
    }

    public function list(array $conditions = [])
    {
        return $this->accountRepository->list();
    }
}
