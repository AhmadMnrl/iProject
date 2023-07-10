<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Orders;
use Illuminate\Http\Request;
//Return type  redirectView
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() : View
    {
        $customers = Customers::latest()->paginate(10);
        return view('customers.index',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'user_id'     => 'required|',
            'name'     => 'required|',
            'email'   => 'required|',
            'address'     => 'required|',
            'phone'     =>'required|'
        ]);
        \App\Models\Customers::create($request->all());
        return redirect()->route('customers.index')->with(['success' => 'Customers created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customers) : View
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) : View
    {
        $customers = Customers::find($id);
        return view('customers.edit',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'user_id'     => 'required',
            'name'     => 'required',
            'email'   => 'required',
            'address'     => 'required',
            'phone'     =>'required'
        ]);
        $customers = Customers::findOrFail($id);
        $customers->update($request->all());
        return redirect()->route('customers.index')->with('success','Customers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $customers = \App\Models\Customers::find($id);
        $customers->delete();
        return redirect()->route('customers.index')->with('success','Product deleted successfully');
    }
}
