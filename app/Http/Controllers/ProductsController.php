<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
//return type redirectView
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   function index() : View 
   {
        $products = Products::all();
        return view('products.index',compact('products'));
   }
   function store(Request $request) : RedirectResponse 
   {
        $this->validate($request, [
            'name'     => 'required|',
            'price'     => 'required|',
            'description'   => 'required|',
            'stock'     =>'required|'
        ]);
        \App\Models\Products::create($request->all());
        return redirect()->route('products');
   }

    /**
     * Display the specified resource.
     */
    public function show(Products $products) : View
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) : View
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
