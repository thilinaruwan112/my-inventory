<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate Input
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required'
        ]);

        // Create Product
        Product::create($request->all());

        //  Redirect User and Notify User
        return redirect()->route('products.index')->with('success', 'Product Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validate Input
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required'
        ]);

        // Create Product
        $product->update($request->all());

        //  Redirect User and Notify User
        return redirect()->route('products.index')->with('success', 'Product Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        //  Redirect User and Notify User
        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully');
    }
}
