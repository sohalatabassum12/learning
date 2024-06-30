<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function store(Request $request) {
        // Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price
        // ]);
       
        // $r =  $request->all();

        // unset($r['_token']);
       
        // Product::create($r);

        //Product::create($request->except('_token'));
        
        //Product::create($request->only('name', 'price'));
        
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;

        return 'created';
    }
}
