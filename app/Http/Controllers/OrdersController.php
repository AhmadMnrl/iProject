<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Customers;
use App\Models\OrderItems;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() : View
    {
        $orders = Orders::latest()->paginate(10);
        $customers = Customers::all();
        $orderItem = OrderItems::all();
        return view('orders.index',compact('orders', 'customers','orderItem'));
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
            'order_date'     => 'required|',
            'total_amount'   => 'required|'
        ]);
        $order = new Orders;
        $order->customers_id = $customers->id;
        $order->order_date = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->save();

        $orderItem = new OrderItems;
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $products->id;
        $orderItem->quantity = $request->quantity;
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
