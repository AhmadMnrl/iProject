<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customers::latest()->paginate(10);
        return view('customers.index',compact('customers'));
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
    public function show(Costumers $costumers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Costumers $costumers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Costumers $costumers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Costumers $costumers)
    {
        //
    }
}
