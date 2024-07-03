<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required'
        ], [
            'name.required' => 'please add name'
        ]);

        // Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price
        // ]);
       
        // $r =  $request->all();

        // unset($r['_token']);
       
        // Product::create($r);

        //Product::create($request->except('_token'));
        
        //Product::create($request->only('name', 'price'));


        if ($file = $request->file('image')) {
           
            $name = time() . $file->getClientOriginalName();
 
            $file->move('images', $name);
        }

        
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $name;

        $product->save();

        return to_route('product');
    }

    public function edit(Product $product)
    {
        //$product = Product::findOrFail($id);

        return view('edit-product', compact('product'));
    }


    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('product');
    }

    public function delete(Product $product) {

        unlink(public_path(). '/images/' . $product->image);
        $product->delete();

        return to_route('product');
    }
}
