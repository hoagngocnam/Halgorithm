<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class ViewData
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next)
	{
		// Current route
		$currentRoute = Route::currentRouteName();
		// Navigation Data
		$navigation = DB::table('navigation_admin')->orderBy('order_num')->get();

		View::share([
			'currentRoute' => $currentRoute,
			'navigation' => $navigation
		]);

		return $next($request);
	}
}
