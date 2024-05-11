<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    function __construct()
    {
        $categories = DB::table('categories')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();
        View::share('categories', $categories);
    }

    function index(){
        return view('products/products');
    }

    function category($id = 0){
        $category = DB::table('categories')->where('id', $id)->first();
    
        if(!$category){
            abort(404);
        }
    
        $query = DB::table('products')
            ->join('categories', 'products.categories', '=', 'categories.id')
            ->select('products.*')
            ->where('categories.id', $id);
    
        // Sắp xếp theo giá từ cao xuống thấp
        if(request()->has('price_desc')){
            $query->orderBy('products.price', 'desc');
        }
    
        // Sắp xếp theo giá từ thấp đến cao
        if(request()->has('price_asc')){
            $query->orderBy('products.price', 'asc');
        }
    
        // Sắp xếp theo tên từ A đến Z
        if(request()->has('name_asc')){
            $query->orderBy('products.tensp', 'asc');
        }
    
        // Sắp xếp theo tên từ Z đến A
        if(request()->has('name_desc')){
            $query->orderBy('products.tensp', 'desc');
        }
    
        // Check if search query is present
        if(request()->has('search')){
            $searchTerm = request()->input('search');
            // Assuming you want to search in product name
            $query->where('products.tensp', 'like', "%$searchTerm%");
        }
    
        $products = $query->get();
    
        if($products->isEmpty()) {
            $message = "Không tìm thấy sản phẩm.";
        } else {
            $message = null;
        }
    
        return view('products.products', compact('category', 'products', 'message'));
    }
    

    function detail($id = 0){
        $product = DB::table('products')->where('id', $id)->first();

        if(!$product){
            abort(404);
        }
        return view('products/detail', compact('product'));
    }
}
