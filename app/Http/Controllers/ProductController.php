<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view ('products.index',compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'product_id' => 'required|max:20',
            'product_name' => 'required|max:255|string',
            'product_price' => 'required|numeric',
            'product_status'=> 'required',
            'product_image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $imagePath = $request->file('product_image')->store('product_image','public');

        Product::create([
            'product_id' => $request->product_id,
            'product_name'=> $request->product_name,
            'product_price'=> $request->product_price,
            'product_status'=> $request->product_status,
            'product_image'=> $imagePath
        ]);

        return redirect('products/create')->with('status','Product Created');
    
    }

    public function edit($product_id){
        $products = Product::find($product_id);
        return view('products.edit',compact('products'));
    }

    public function update(Request $request,$product_id){
        $request->validate([
            'product_id' => 'required|max:20',
            'product_name' => 'required|max:255|string',
            'product_price' => 'required|numeric',
            'product_status'=> 'required',
            'product_image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $imagePath = $request->file('product_image')->store('product_image','public');

        Product::findOrFail($product_id)->update([
            'product_id' => $request->product_id,
            'product_name'=> $request->product_name,
            'product_price'=> $request->product_price,
            'product_status'=> $request->product_status,
            'product_image'=> $imagePath
        ]);


        return redirect()->back()->with('status','Product Updated');
    


    }
    public function destroy($product_id){
        $products = Product::find($product_id);
        $products -> delete();

        return redirect()->back()->with('status','Product Deleted');
    }

}
