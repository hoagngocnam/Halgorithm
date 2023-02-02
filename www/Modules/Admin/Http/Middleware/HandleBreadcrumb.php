<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HandleBreadcrumb
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
        $nameRoute = $request->route()->getName();
        $breadcrumb = [];

        switch ($nameRoute) {
            case "admin.account.list":
                $breadcrumb = [
                    route('admin.dashboard') => 'Home',
                    route('admin.account.list') => 'Account',
                    null => 'Add'
                ];
                break;
            case "admin.account.add":
                $breadcrumb = [
                    route('admin.dashboard') => 'Home',
                    route('admin.account.list') => 'Account',
                    null => 'Add'
                ];
                break;
            case "admin.category.index":
                $breadcrumb = [
                    route('admin.dashboard') => 'home',
                    route('admin.account.list') => 'category',
                    null => 'list'
                ];
                break;
            case "admin.category.add":
                $breadcrumb = [
                    route('admin.dashboard') => 'home',
                    route('admin.account.list') => 'category',
                    null => 'add'
                ];
                break;
            default:
        }

        View::share('breadcrumb', $breadcrumb);

        return $next($request);
    }
}
