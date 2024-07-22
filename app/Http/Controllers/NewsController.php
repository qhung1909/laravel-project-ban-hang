<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller
{
    function __construct()
    {
        $categories = DB::table('categories')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();
        View::share('categories', $categories);

    }

    function index(){
        return view('news.news');

    }

}
