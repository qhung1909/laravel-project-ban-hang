<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

abstract class Controller 
{
    function __construct()
    {
        $categories = DB::table('categories')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();
        View::share('categories', $categories);


    }
}
