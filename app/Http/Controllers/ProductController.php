<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();
        return view ('product.index',compact('product'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $product = Product::create($request->all());
        return redirect()->route('product.show',$product->id);
    }

    public function show(Product $product){
        return view('product.show',compact('product'));
    }

    public function edit(Product $product){
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,Product $product){
        $product->update($request->all());
        return redirect()->route('product.show', $product->id);
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index');
    }

}
