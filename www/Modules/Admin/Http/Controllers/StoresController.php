<?php

namespace Modules\Admin\Http\Controllers;

use App\Exceptions\AccountException;
use App\Http\Controllers\Controller;
use App\Models\{Account, LoginHistory};
use Exception;
use Illuminate\Http\Request;
use Modules\Admin\Repositories\AccountRepository;
use Modules\Admin\Repositories\StoreRepository;

class StoresController extends Controller
{
	private StoreRepository $storeRepository;
	private AccountRepository $accountRepository;

	public function __construct(
		StoreRepository $storeRepository,
		AccountRepository $accountRepository
	) {
		$this->storeRepository = $storeRepository;
		$this->accountRepository = $accountRepository;
	}

	/*
	 * Màn hình danh sách cửa hàng
	*/
	public function index(Request $request)
	{
		$parameters = $request->only(['mail_adr', 'full_name']);
		$stores = $this->storeRepository->paginate($parameters);

		return view('admin::stores.index', compact(
			'parameters',
			'stores',
		));
	}

	/*
     * Màn hình thêm tài khoản
     */
	public function add(Request $request)
	{
		$accounts = $this->accountRepository->list();
		if ($request->isMethod('post')) {
			$params = $request->only(['name', 'account_id', 'background']);
			try {
				$account = $this->storeRepository->add($params);
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
		$accounts = $this->accountRepository->list();
		$store = $this->storeRepository->first($store_id);
		if ($request->isMethod('post')) {
			$params = $request->only(['name', 'account_id', 'background']);
			try {
				$result = $this->storeRepository->update(['id' => $store_id], $params);
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
			$this->storeRepository->physicalDelete($store_id);
			notification_message_settings(NOTIFICATION['success'], 'Success !');
		} catch (Exception $exception) {
			notification_message_settings(NOTIFICATION['danger'], 'Failure !');
		}
		return back();
	}
}
