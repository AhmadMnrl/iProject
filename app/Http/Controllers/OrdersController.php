<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Customers;
use App\Models\Products;
use App\Models\OrderItems;
use DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() : View
    {
        $customers = Customers::all();
        $products = Products::all();
        $orders = DB::table('orders')
        ->select('orders.*', 'customers.name as customer_name', 'products.name as product_name', 'products.price', 'order_items.quantity')
        ->join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->join('products', 'order_items.product_id', '=', 'products.id')
        ->join('customers', 'orders.customers_id', '=', 'customers.id')
        ->where('orders.status', 1)
        ->latest()
        ->paginate(10);    
        return view('orders.index', compact('orders','customers','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'customers_id'     => 'required|',
            'total_amount'   => 'required|'
        ]);
        $customersId = $request->customers_id;
        $customer = Customers::find($customersId);
        $productId = $request->product_id;
        $products = Products::find($productId);

        $orderItem = new OrderItems;
        $orderItem->product_id = $products->id;
        $orderItem->quantity = $request->quantity;
        $orderItem->save();

        $order = new Orders;
        $order->customers_id = $customer->id;
        $order->product_id = $products->id;
        $order->order_date = date("Y/m/d");
        $order->order_item_id = $orderItem->id;
        $order->total_amount = $request->total_amount;
        $order->save();

        $orderItem = new OrderItems;
        $orderItem->order_id = $order->id;
        $orderItem->save();

        return redirect()->route('orders.index')->with(['success' => 'Orders created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) : View
    {
        $orders = Orders::find($id);
        return view('orders.edit',compact('orders'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'customers_id'     => 'required',
            'order_date'     => 'required',
            'total_amount'   => 'required'
        ]);
        $orders = Orders::findOrFail($id);
        $orders->update($request->all());
        return redirect()->route('orders.index')->with('success','orders updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $orders = \App\Models\Orders::find($id);
        $orders->delete();
        return redirect()->route('orders.index')->with('success','Product deleted successfully');
    }
}
