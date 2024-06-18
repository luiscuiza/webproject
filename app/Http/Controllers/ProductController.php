<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('product.index', ['products' => $products]);
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $producto = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('product.show', $producto->id);
    }

    public function show($id_prod)
    {
        $product = Product::with('category')->findOrFail($id_prod);
        return view('product.show', compact('product'));
    }

    public function edit($id_prod)
    {
        $product = Product::find($id_prod);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id_prod) {
        $producto = Product::find($id_prod);
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);
        $producto->name = $request->input('name');
        $producto->price = $request->input('price');
        $producto->description = $request->input('description');
        $producto->category_id = $request->input('category_id');
        $producto->save();
        return redirect()->route('product.index');
    }

    public function destroy($id) {
        $prod = Product::find($id);
        $prod->delete();
        return redirect()->route("product.index");
    }
}
