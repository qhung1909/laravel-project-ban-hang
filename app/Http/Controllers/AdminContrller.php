<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContrller extends Controller
{
    function index(){
        return view('admin.layouts.app');
    }
}
