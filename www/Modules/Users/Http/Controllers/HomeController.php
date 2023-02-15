<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Màn hình Home
     */
    public function index()
    {
        return view('users::home.index');
    }
}
