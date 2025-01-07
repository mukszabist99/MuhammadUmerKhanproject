<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController
{
    public function datasubmit(Request $request){
        Product::create([
            'product' => $request['product'],
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'quantity' => $request['quantity'],
            
        ]);
        return redirect('/Product');
    }
}
