<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminContrller extends Controller
{
    function index(){
        return view('admin.dashboard.dashboard');
    }
    function dashboard(){
        $productCount = DB::table('products')->count();
        $categoriesCount = DB::table('products')->distinct()->count('categories');

        $products = DB::table('products')
        ->join('categories', 'products.categories', '=', 'categories.id')
        ->select('products.*', 'categories.ten_dm as category_name')
        ->get();
        return view('admin.dashboard.dashboard', compact('productCount', 'categoriesCount', 'products'));
    }

    function store(Request $request){
        $rules = [
            'tensp' => 'required',
            'price' => 'required',
            'price_discount' => 'required|numeric',
            'hot' => 'required',
            'an_hien' => 'required',
            'categories' => 'required', 
            'img' => 'image' 
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }
    
        $product = new Product();   
        $product->tensp = $request->tensp;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->hot = $request->hot;
        $product->an_hien = $request->an_hien;
        $product->categories = $request->categories;
    
        // Image
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $ext = $img->getClientOriginalExtension();
            $imagename = time().'.'.$ext;
    
            $img->move(public_path('upload/products'), $imagename);
            // Save Img
            $product->img = $imagename; 
        }
    
        $product->save();
        return redirect()->route('admin')->with('success','Sản phẩm được thêm thành công.');

    }   
    function createProduct(){
        return view('admin.crud.create');
    }

    function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.crud.edit',[
            'product'=>$product
        ]);
    }
    function updateProduct($id, Request $request){
        $product = Product::findOrFail($id);
        $rules = [
            'tensp' => 'required',
            'price' => 'required',
            'price_discount' => 'required|numeric',
            'hot' => 'required',
            'an_hien' => 'required',
            'categories' => 'required',
            'img' => 'image' 
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect()->route('products.edit', $product->id)->withInput()->withErrors($validator);
        }
    
        $product->tensp = $request->tensp;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->hot = $request->hot;
        $product->an_hien = $request->an_hien;
        $product->categories = $request->categories;
        $product->save();
        // Image
        if ($request->hasFile('img')) {
            File::delete(public_path('upload/products'.$product->img));

            $img = $request->file('img');
            $ext = $img->getClientOriginalExtension();
            $imagename = time().'.'.$ext;
    
            $img->move(public_path('upload/products'), $imagename);
            // Save Img
            $product->img = $imagename; 
        }
    
        $product->save();

        return redirect()->route('admin')->with('success','Sản phẩm được sửa thành công.');
      
    }

    function deleteProduct($id){
        $product = Product::findOrFail($id);
        File::delete(public_path('upload/products'. '/' .$product->img));
        $product->delete();
        return redirect()->route('admin')->with('success','Sản phẩm được xóa thành công.');

    }
}
