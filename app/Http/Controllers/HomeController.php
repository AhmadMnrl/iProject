<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Customers;
use App\Models\OrderItems;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('front.home',compact('products'));
    }
    public function waiting()
    {
        $products = Products::all();
        return view('front.home',compact('products'));
    }
    public function ordersId($id)
    {
        $products = Products::where('id',$id)->first();
        return view('front.produk-detail',compact('products'));
    }
    public function ordersPost(Request $request, $id)
    {
    //    dd($request);
        $products = Products::where('id',$id)->first();
        $date = Carbon::now();
        $customer = Customers::where('id',$id)->first();

        if (!$customer) {
            // Penanganan jika record Customers tidak ditemukan
            return redirect()->back()->with('error', 'Customer not found');
        }

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
            $orders->save();
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
