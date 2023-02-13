<?php

namespace Modules\Admin\Http\Controllers;

use App\Exceptions\AccountException;
use App\Http\Controllers\Controller;
use App\Models\{Account, LoginHistory};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Admin\Exports\AccountsExport;
use Modules\Admin\Http\Requests\AccountRequest;
use Modules\Admin\Http\Services\AccountService;

class AccountController extends Controller
{
    protected AccountService $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    /*
     * Màn hình danh sách tài khoản
     */
    public function list(AccountRequest $request)
    {
        $parameters = $request->only(['mail_adr', 'full_name']);
        $accounts = $this->accountService->paginate($parameters);

        return view('admin::account.list', compact(
            'parameters',
            'accounts',
        ));
    }

    /*
     * Màn hình thêm tài khoản
     */
    public function add(AccountRequest $request)
    {
        if ($request->isMethod('post')) {
            $params = $request->only(['mail_adr', 'first_name', 'last_name']);
            $params['role'] = 1;
            $password = $this->generatePassword();
            $params['password'] = Hash::make($password);
            try {
                $account = $this->accountService->add($params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Success !'
                ];
                $targetRoute = redirect()->route('admin.account.list');
            } catch (Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Failure !'
                ];
                $targetRoute = back();
            }
            notification_message_settings($notification['status'], $notification['title'], $params['mail_adr']);
            return $targetRoute;
        }

        return view('admin::account.add');
    }

    /*
     * Màn hình thêm tài khoản
     */
    public function handleAdd(AccountRequest $request)
    {
        if ($request->isMethod('post')) {
            $params = $request->only(['mail_adr', 'first_name', 'last_name']);
            $params['role'] = 1;
            $password = $this->generatePassword();
            $params['password'] = Hash::make($password);
            try {
                $account = $this->accountService->add($params);
                $notification = [
                    'status' => NOTIFICATION['success'],
                    'title' => 'Success !'
                ];
                $targetRoute = redirect()->route('admin.account.list');
            } catch (Exception $exception) {
                $notification = [
                    'status' => NOTIFICATION['danger'],
                    'title' => 'Failure !'
                ];
                $targetRoute = back();
            }
            notification_message_settings($notification['status'], $notification['title'], $params['mail_adr']);
            return $targetRoute;
        }

        return view('admin::account.add');
    }

    /*
     * Màn hình cập nhật tài khoản
     */
    private function generatePassword()
    {
        return uniqid('', true);
    }

    /*
     * Màn hình xóa tài khoản
     */
    public function delete(Request $request, int $account_id)
    {
        try {
            $this->accountService->physicalDelete($account_id);
            notification_message_settings(NOTIFICATION['success'], 'Success !');
        } catch (Exception $exception) {
            notification_message_settings(NOTIFICATION['danger'], 'Failure !');
        }
        return back();
    }

    public function importCsv()
    {

    }

    public function updateHistoryLogin(Request $request)
    {
        $account = Auth::user();
        $history = LoginHistory::find(1);
        $response = $account->can('update', $history);
        dd($response);
        // $time = '1996-12-20';
        LoginHistory::where('id', 2)
            ->update(['login_time' => '1996-1-20']);
        // $flight = LoginHistory::find(2);
        // $flight->login_time =  $time;
        // $flight->save();
    }

    public function update(StoreFormRequest $request, int $account_id)
    {
        $account = $this->accountService->first($account_id);
        if ($request->isMethod('post')) {
            $params = $request->only(['mail_adr', 'first_name', 'last_name']);
            $params['role'] = 1;
            $password = $this->generatePassword();
            $params['password'] = Hash::make($password);
            try {
                $result = $this->accountService->update($account_id, $params);
                notification_message_settings(NOTIFICATION['success'], 'Success !', $account->mail_adr);
                //                $account->notify(new NotificationAccountVerification($password));
                return redirect()->route('admin.account.list');
            } catch (Exception $exception) {
                notification_message_settings(NOTIFICATION['danger'], 'Failure !', $params['mail_adr']);
                return back();
            }
        }
        return view('admin::account.update', compact('account'));
    }

    public function syncAccounts()
    {
        // Account::createIndex($shards = null, $replicas = null);
        // Account::putMapping($ignoreConflicts = true);
        $accounts = Account::where('id', '<', 3000)->get();
        $accounts->addToIndex();
        echo "Oke";
        die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAccountRequest $request
     * @return Response
     */
    public function detail(Request $request, Account $account)
    {
        //
        // try {
        //     throw new AccountException();
        // } catch (AccountException $exception) {
        //     report($exception);
        // }
        $message = $this->handleMessageException(__FILE__, __LINE__, 'Message Error');
        throw new AccountException([
            'file' => __FILE__,
            'line' => __LINE__,
            'message' => 'Message Error'
        ]);

        return '<br> Màn hình chi tiết tài khoản';
    }

    /*
     * Màn hình dowload excel
     */
    public function export(AccountRequest $request)
    {
        return Excel::download(new AccountsExport(), 'accounts.xlsx');
    }
}
