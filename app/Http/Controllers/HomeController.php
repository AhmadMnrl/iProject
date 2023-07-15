<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Customers;
use App\Models\OrderItems;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Products::orderBy('id', 'asc')->paginate(8);
        return view('front.home',compact('products'));
    }
    public function waiting()
    {
        $products = \App\Models\Products::orderBy('id', 'asc')->paginate(8);
        return view('front.home',compact('products'));
    }
    public function ordersId($id)
    {
        $products = Products::where('id',$id)->first();
        return view('front.produk-detail',compact('products'));
    }
    function ordersDestroy($id) : RedirectResponse {
        $orderItem = OrderItems::where('id',$id)->first();

        $order = Orders::find($orderItem->order_id);
        $order->total_amount = $order->total_amount-$orderItem->total_amount_items;
        $order->save();

        $orderItem->delete();
        return redirect()->route('cart');
    }
    public function ordersPost(Request $request, $id)
    {
        
        $products = Products::where('id',$id)->first();
        $date = Carbon::now();
        $userId = Auth::user()->id;
        $customer = Customers::where('user_id',$userId)->first();


        if($request->quantity > $products->stock)
        {
            return redirect()->route('ordersId',$id);
        }

        $cek_orders = Orders::where('customers_id',$customer->id)->where('status',0)->first();
        if(empty($cek_orders))
        {
            $orders = new Orders;
            $orders->customers_id = $customer->id;
            $orders->order_date = $date;
            $orders->status = 0;
            $orders->total_amount = 0;
            $orders->code = mt_rand(100, 999);
            $orders->save();
        }else{
            $orders = Orders::find($cek_orders->id);
        }

        $orderNew = Orders::where('customers_id',$customer->id)->where('status',0)->first();
        $cek_orders_item = OrderItems::where('product_id', $products->id)->where('order_id',$orderNew->id)->first();
        if (empty($cek_orders_item)) {
            $orderItem = new OrderItems;
            $orderItem->order_id = $orders->id;
            $orderItem->product_id = $products->id;
            $orderItem->quantity = $request->quantity;
            $orderItem->total_amount_items = $products->price * $request->quantity;
            $orderItem->save();
        } else {
            $orderItem = OrderItems::where('product_id', $products->id)->where('order_id', $orderNew->id)->first();
            $orderItem->quantity = $orderItem->quantity * $request->quantity;
            $price_order_item_new = $products->price * $request->quantity;
            $orderItem->total_amount_items = $orderItem->total_amount_items + $price_order_item_new;
            $orderItem->update();
        }        
        $orders = Orders::where('customers_id',$customer->id)->where('status',0)->first();
        $orders->total_amount = $orders->total_amount+$products->price*$request->quantity;
        $orders->save();

        Alert::success('Success', 'Successfully added order.');
        return redirect()->route('home');

    }
    function cart() : View {
        $customerId = Auth::user()->id;
        $order = DB::table('orders')
        ->join('customers','orders.customers_id','=','customers.id')
        ->join('order_items','orders.id','=','order_items.order_id')
        ->join('products','products.id','=','order_items.product_id')
        ->where('customers.user_id','=',$customerId)
        ->where('orders.status','=','0')
        ->select('orders.*','order_items.id as item_id','products.gambar as gambar','products.name as name','products.price as price','order_items.quantity as quantity','order_items.total_amount_items')
        ->get();

        $summary = Orders::where('customers_id',$customerId)->where('status','0')->first();
        return view('front.cart',compact('customerId','order','summary'));
    }
    
    function checkoutPost(Request $request) : RedirectResponse {
        $customerId = Auth::user()->id;
        $userAddress = Customers::where('user_id', $customerId)->first();
        
        // Cek apakah alamat telah diisi
        if (!$userAddress || !$userAddress->address) {
            return redirect()->route('profile',$userAddress->id)->with('message', 'Lengkapi alamat Anda sebelum melanjutkan ke pembayaran.');
        }
                $transaction = new Transaction;
                $transaction->order_id = $request->order_id;
                $transaction->amount = $request->total_amount;
                $transaction->transaction_date = now();
                $transaction->save();
            
                $order = Orders::find($request->order_id);
                $order->status = 1;
                $order->save();

                $orderItems = OrderItems::where('order_id', $request->order_id)->get();
                foreach ($orderItems as $orderItem) {
                    $product = Products::find($orderItem->product_id);
                    $product->stock -= $orderItem->quantity;
                    $product->save();
                }

        return redirect()->route('checkout');
    }
    function checkout() : View {
        $userId = Auth::user()->id;

$checkedOutOrders = DB::table('orders')
    ->join('customers', 'orders.customers_id', '=', 'customers.id')
    ->join('order_items', 'orders.id', '=', 'order_items.order_id')
    ->join('products', 'order_items.product_id', '=', 'products.id')
    ->where('customers.user_id', $userId)
    ->where('orders.status', 1)
    ->select(
        'customers.name as name',
        'products.gambar',
        'products.name as name',
        'products.price', // Fix the column name here
        'order_items.quantity',
        'order_items.total_amount_items',
        'orders.total_amount',
        'orders.code',

    )
    ->get();

return view('front.checkout', compact('checkedOutOrders'));

        
    }
    function profile($id) : View {
        $customerId = Auth::user()->id;
        $customer = \App\Models\Customers::where('user_id', $customerId)->get();
        return view('front.profile',compact('customer'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
