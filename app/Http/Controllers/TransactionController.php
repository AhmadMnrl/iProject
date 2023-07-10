<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Orders;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() : View
    {
        $transactions = Transaction::latest()->paginate(10);
        $orders = Orders::all();
        return view('transactions.index',compact('transactions', 'orders'));
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
    function store(Request $request)
    {
        $this->validate($request, [
            'order_id'     => 'required|',
            'transaction_date'     => 'required|',
            'amount'   => 'required|'
        ]);
        
        \App\Models\Transaction::create($request->all());
        return redirect()->route('transactions.index')->with(['success' => 'Transactions created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transactions = Transaction::find($id);
        return view('transactions.edit',compact('transactions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'order_id'     => 'required',
            'transaction_date'     => 'required',
            'amount'   => 'required'
        ]);
        $transactions = Transaction::findOrFail($id);
        $transactions->update($request->all());
        return redirect()->route('transactions.index')->with('success','Transactions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $transactions = \App\Models\Transaction::find($id);
        $transactions->delete();
        return redirect()->route('transactions.index')->with('success','Product deleted successfully');
    }
}
