<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();
        return view ('products.index',compact('product'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = Product::create($request->all());
        return redirect()->route('products.show',$product->id);
    }

    public function show(Product $product){
        return view('products.show',compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit',compact('product'));
    }
    public function update(Request $request,Product $product){
        $product->update($request->all());
        return redirect()->route('products.show', $product->id);
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }

}
