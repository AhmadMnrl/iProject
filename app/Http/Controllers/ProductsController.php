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
        $products = Products::latest()->paginate(10);
        return view('products.index',compact('products'));
   }
   function produk()
   {
        $products = Products::all();
        return view('front.produk',compact('products'));
   }


   function store(Request $request) : RedirectResponse 
   {
        $this->validate($request, [
            'name'     => 'required|',
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'price'     => 'required|',
            'description'   => 'required|',
            'stock'     =>'required|'
        ]);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/product', $gambar->hashName());
        $products = new Products;
        $products->name = $request->name;
        $products->gambar = $gambar->hashName();
        $products->price = $request->price;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->save();
        return redirect()->route('products.index')->with(['success' => 'Product created successfully.']);;
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
        $products = Products::find($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required'
        ]);
        $products = Products::findOrFail($id);
        $products->update($request->all());
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $products = \App\Models\Products::find($id);
        $products->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
