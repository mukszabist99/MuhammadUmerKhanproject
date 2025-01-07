<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
}
public function product(){
    $products = Part::all();
    return view("frontend.product",compact('products'));
}
public function contact(){
    return view('frontend.Contact');
}
public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Search for products by name or description
        $products = Part::where('name', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->get();
    
        return response()->json(['products' => $products]);
    }
}
