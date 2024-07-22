<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function __construct()
    {
        $user = Auth::user();

    }

    function index(){
        $categories = DB::table('categories')
                        ->leftJoin('products', 'categories.id', '=', 'products.categories')
                        ->select('categories.*', DB::raw('GROUP_CONCAT(products.id) as product_ids'))
                        ->where('categories.an_hien', 1)
                        ->groupBy('categories.id')
                        ->orderBy('categories.thu_tu', 'asc')
                        ->get();    
        

        return view('home', compact('categories'));
    }

    function login(){
        return view('account.login');
    }
}
