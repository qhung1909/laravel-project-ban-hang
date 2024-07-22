<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{   
    public function cart(){
        return view('cart.cart');
    }

    public function checkout(Request $request){
        // Tạo một random_order_id mới cho đơn hàng
        $randomOrderId = random_int(100000, 999999);
    
        $order = new Order();
        $order->user_id = (Auth::check()) ? Auth::user()->id : null;
        $order->user_fullname = $request->fullname;
        $order->user_email = $request->email;
        $order->user_phone = $request->phone;
        $order->user_address = $request->address;
        $order->total_money = 0;
        $order->total_quantity = 0;
        $order->random_order_id = $randomOrderId;
    
        $order->save();
    
        foreach (session('cart') as $sp) {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $sp->id;
            $order_detail->quantity = $sp->quantity;
            $order_detail->price = $sp->price;
            $order_detail->random_order_id = $randomOrderId;
            $order_detail->save();
    
            $order->total_money += $order_detail->quantity * $order_detail->price;
            $order->total_quantity += $order_detail->quantity;
        }
        $order->save();
        session()->forget('cart');
        return redirect('/cart')->with('message', "Đặt hàng thành công với mã đơn hàng $randomOrderId");

    }
    


    public function tracking(Request $request)
    {
        if ($request->has('order_id') && $request->input('order_id') !== '') {
            $randomOrderId = $request->input('order_id');
    
            $orderDetails = DB::table('order_details')
                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                ->join('products', 'order_details.product_id', '=', 'products.id')
                ->select(
                    'orders.*',
                    'order_details.*',
                    'products.*'
                )
                ->where('orders.random_order_id', $randomOrderId)
                ->get();
    
            if (!$orderDetails->isEmpty()) {
                return response()->json(['orderDetails' => $orderDetails], 200);
            } else {
                return response()->json(['message' => 'Không tìm thấy đơn hàng.'], 404);
            }
        } else {
            return response()->json(['message' => 'Thiếu order_id hoặc order_id trống.'], 400);
        }
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Kiểm tra xem có giỏ hàng chưa?, 
        if(is_null(session('cart'))){
            session()->put('cart',[]);
        }
        $inCart = false;
        // Đã có SP trong giỏ hàng -> Tăng SL sản phẩm
        foreach(session('cart') as $sp){
            if($sp->id == $request->id){
                $sp->quantity += $request->quantity;
                $inCart = true;
                break;                
            }
        }
        if(!$inCart){
            $sp = Product::find($request->id);
            $sp->quantity = $request->quantity;
            session()->push('cart', $sp);
        }

        $kq =[
            "status"=>true,
            "message"=> "Đã thêm sản phẩm vào giỏ hàng",
            "data" => session('cart'),
        ];
        return response()->json($kq,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        foreach (session('cart') as $sp) {
            if($sp->id == $id){
                $sp->quantity = $request->quantity;
                break;
            }
           
        }        
        $kq =[
            "status"=>true,
            "message"=> "Đã thay đổi SL của SP",
            "data" => session('cart'),
        ];
        return response()->json($kq,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = session('cart');
        session()->forget('cart');
        array_splice($cart,$id,1);
        session()->put('cart',$cart);
        $kq =[
            "status"=>true,
            "message"=> "Đã xóa sản phẩm khỏi giỏ hàng",
            "data" => session('cart'),
        ];
        return response()->json($kq,200);
    }
}
