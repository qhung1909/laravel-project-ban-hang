<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;;
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
        ->where('categories.id', $id)
        ->where('products.an_hien', 1);
    
        if(request()->has('price_desc')){
            $query->orderBy('products.price', 'desc');
        }
    
        if(request()->has('price_asc')){
            $query->orderBy('products.price', 'asc');
        }
    
        if(request()->has('name_asc')){
            $query->orderBy('products.tensp', 'asc');
        }
    
        if(request()->has('name_desc')){
            $query->orderBy('products.tensp', 'desc');
        }
        
        if(request()->has('search')){
            $searchTerm = request()->input('search');
            $query->where('products.tensp', 'like', "%$searchTerm%");
        }
    
        $products = $query->paginate(8);

        if($products->isEmpty()) {
            $message = "Không tìm thấy sản phẩm.";
        } else {
            $message = null;
        }
        
        return view('products.products', compact('category', 'products', 'message'));
    }
    

    function detail($id = 0){
        $product = DB::table('products')->where('id', $id)->first();

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product, 200);
    }

}
