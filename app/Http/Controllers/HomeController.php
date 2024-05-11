<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    function __construct()
    {
        $categories = DB::table('categories')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();
        View::share('categories', $categories);
    }
    function index(){
        $categories = DB::table('categories')
                        ->leftJoin('products', 'categories.id', '=', 'products.categories')
                        ->select('categories.*', DB::raw('GROUP_CONCAT(products.id) as product_ids'))
                        ->where('categories.an_hien', 1)
                        ->groupBy('categories.id')
                        ->orderBy('categories.thu_tu', 'asc')
                        ->get();

        return view('home', ['categories' => $categories]);
    }

    function login(){
        return view('account.login');
    }
}
