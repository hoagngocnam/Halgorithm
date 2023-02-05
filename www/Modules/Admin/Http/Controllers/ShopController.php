<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Services\AccountService;
use Modules\Admin\Http\Services\ShopService;

class ShopController extends Controller
{
    private ShopService $shopService;
    private AccountService $accountService;

    public function __construct(
        ShopService    $shopService,
        AccountService $accountService
    )
    {
        $this->shopService = $shopService;
        $this->accountService = $accountService;
    }

    /*
     * Màn hình danh sách cửa hàng
    */
    public function list(Request $request): Renderable
    {
        $parameters = $request->only(['name']);
        $shops = $this->shopService->paginate($parameters);
        dd($shops);
        return view('admin::stores.index', compact(
            'parameters',
            'shops',
        ));
    }

    /*
     * Màn hình thêm tài khoản
     */
    public function add(Request $request)
    {
        $accounts = $this->accountService->list();
        if ($request->isMethod('post')) {
            $params = $request->only(['name', 'account_id', 'background']);
            try {
                $account = $this->shopService->add($params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Success !'
                ];
                $targetRoute = redirect()->route('admin.stores.index');
            } catch (Exception $exception) {
                dd($exception->getMessage());
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Failure !'
                ];
                $targetRoute = back()->withInput();
            }
            notification_message_settings($notification['status'], $notification['title'], $params['name']);
            return $targetRoute;
        }

        return view('admin::stores.add', compact(
            'accounts'
        ));
    }

    /*
     * Màn hình cập nhật tài khoản
     */
    public function update(Request $request, int $store_id)
    {
        $accounts = $this->accountService->list();
        $store = $this->shopService->first($store_id);
        if ($request->isMethod('post')) {
            $params = $request->only(['name', 'account_id', 'background']);
            try {
                $result = $this->shopService->update(['id' => $store_id], $params);
                return redirect()->route('admin.stores.index');
            } catch (Exception $exception) {
                return back();
            }
        }
        return view('admin::stores.update', compact('accounts', 'store'));
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
