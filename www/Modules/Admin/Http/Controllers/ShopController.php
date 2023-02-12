<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\Categories\{AddRequest, FindRequest, UpdateRequest};
use Modules\Admin\Http\Services\AccountService;
use Modules\Admin\Http\Services\ShopService;

class ShopController extends Controller
{
    private ShopService $shopService;
    private AccountService $accountService;

    public function __construct(
        ShopService    $shopService,
        AccountService $accountService
    ) {
        $this->shopService = $shopService;
        $this->accountService = $accountService;
    }

    /*
     * Màn hình danh sách cửa hàng
    */
    public function list(FindRequest $request): Renderable
    {
        $params = $request->only(['name']);
        $shops = $this->shopService->paginate($params);
        return view('admin::shop.list', compact(
            'params',
            'shops',
        ));
    }

    /*
     * Màn hình thêm tài khoản
     */
    public function add()
    {
        $accounts = $this->accountService->list([]);
        return view('admin::shop.add', compact('accounts'));
    }

    public function handleAdd(AddRequest $request)
    {
        $params = $request->only(['name', 'account_id', 'background']);
        try {
            $account = $this->shopService->add($params);
            $notification = [
                'status' => NOTIFICATION['success'],
                'title' => 'Success !'
            ];
            $targetRoute = redirect()->route('admin.shop.list');
        } catch (Exception $exception) {
            $notification = [
                'status' => NOTIFICATION['danger'],
                'title' => 'Failure !'
            ];
            $targetRoute = back()->withInput();
            Log::error('Method HandleAdd : ' . $exception->getMessage());
        }
        notification_message_settings($notification['status'], $notification['title'], $params['name']);
        return $targetRoute;
    }


    /*
     * Màn hình cập nhật tài khoản
     */
    public function formUpdate(int $shop_id)
    {
        $accounts = $this->accountService->list();
        $shop = $this->shopService->first($shop_id);
        return view('admin::shop.update', compact('accounts', 'store'));
    }

    public function handleUpdate(UpdateRequest $request, int $shop_id)
    {
        $params = $request->only(['name', 'account_id', 'background']);
        try {
            $this->shopService->update($shop_id, $params);
            return redirect()->route('admin.shop.list');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back();
        }
    }

    /*
     * Màn hình xóa tài khoản
     */
    public function delete(int $shop_id)
    {
        try {
            $this->shopService->logicDelete($shop_id);
            notification_message_settings(NOTIFICATION['success'], 'Success !');
        } catch (Exception $exception) {
            notification_message_settings(NOTIFICATION['danger'], 'Failure !');
            Log::error($exception->getMessage());
        }
        return back();
    }
}
