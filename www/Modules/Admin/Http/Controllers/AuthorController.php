<?php

namespace Modules\Admin\Http\Controllers;

use App\Exceptions\AccountException;
use App\Http\Controllers\Controller;
use App\Models\{Account, LoginHistory};
use App\Repositories\Interfaces\AuthorRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AuthorController extends Controller
{
	protected AuthorRepositoryInterface $authorRepository;

	public function __construct(AuthorRepositoryInterface $authorRepository)
	{
		$this->authorRepository = $authorRepository;
	}

	public function index(Request $request)
	{
		$authors = $this->authorRepository->paginate();

		return view('admin::author.index', compact(
			'authors',
		));
	}

	/**
	 * Lấy danh sách account
	 */
	public function add(Request $request)
	{
		if ($request->isMethod('post')) {
			$params = $request->only(['name', 'birthday', 'date_of_death', 'description']);
			$result = $this->authorRepository->add($params);
		}

		return view('admin::author.add');
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

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  UpdateAccountRequest  $request
	 * @param  Account  $account
	 * @return Response
	 */
	public function update(Request $request, Account $account)
	{
		//
		echo "man hinh update";
		die;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	// public function create()
	// {
	//     //
	// }

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
	 * @param  StoreAccountRequest  $request
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

	/**
	 * Display the specified resource.
	 *
	 * @param  Account  $account
	 * @return Response
	 */
	public function show(Account $account)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Account  $account
	 * @return Response
	 */
	public function edit(Account $account)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Account  $account
	 * @return Response
	 */
	public function destroy(Account $account)
	{
		//
	}
}
