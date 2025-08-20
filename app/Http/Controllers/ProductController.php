<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::get();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'product_name' => 'required',
            'product_details' => 'required',
        ]);

        Product::create($credentials);
        return redirect()->route('products.index')->with('success', 'Product Added Successfully!');
    }

    public function show(Request $request, $id)
    {
        $products = Product::find($id);
        return view('products.show', compact('products'));
    }

    public function edit(Request $request, $id)
    {
        $products = Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $credentials = $request->validate([
            'product_name' => 'required',
            'product_details' => 'required',
        ]);
        $products = Product::find($id);
        $products->update($credentials);
        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy(Request $request, $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product Deleted Successfully');
    }
}
