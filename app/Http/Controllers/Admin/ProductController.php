<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Product created');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Product updated');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted');
    }
    public function archive($id)
    {
        $product = Product::findOrFail($id);
        $product->update(['is_archived' => true]);
        return redirect()->route('admin.products.index')->with('success', 'Product archived successfully');
    }

    public function restore($id)
    {
        $product = Product::findOrFail($id);
        $product->update(['is_archived' => false]);
        return redirect()->route('admin.products.index')->with('success', 'Product restored successfully');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }
}
