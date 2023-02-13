<?php

namespace Modules\Users\Http\Controllers;

class ShopController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('users::shop.index');
    }
}
