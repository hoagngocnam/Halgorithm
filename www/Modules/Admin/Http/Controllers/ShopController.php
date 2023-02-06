<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Admin\Http\Requests\Shops\{
    AddRequest,
    FindRequest,
    UpdateRequest
};
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
    public function formAdd()
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
    public function formUpdate(int $store_id)
    {
        $accounts = $this->accountService->list();
        $store = $this->shopService->first($store_id);
        return view('admin::stores.update', compact('accounts', 'store'));
    }

    public function handleUpdate(UpdateRequest $request, int $store_id)
    {
        $params = $request->only(['name', 'account_id', 'background']);
        try {
            $result = $this->shopService->update(['id' => $store_id], $params);
            return redirect()->route('admin.stores.index');
        } catch (Exception $exception) {
            return back();
        }
    }

    /*
     * Màn hình xóa tài khoản
     */
    public function delete(Request $request, int $store_id)
    {
        try {
            $this->shopService->physicalDelete($store_id);
            notification_message_settings(NOTIFICATION['success'], 'Success !');
        } catch (Exception $exception) {
            notification_message_settings(NOTIFICATION['danger'], 'Failure !');
        }
        return back();
    }
}
