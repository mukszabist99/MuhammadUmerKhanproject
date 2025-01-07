<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartController extends Controller
{
    public function index()
    {
        $products = Part::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Part();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();
        return redirect()->route('dashboard');
    }

    public function edit(Part $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Part $product)
    {
        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->update($validated);
        return redirect()->route('dashboard')->with('success', 'Part updated successfully!');
    }
    public function show(Part $product)
    {
        return view('admin.products.view', compact('product'));
    }

    public function destroy(Part $product)
    {

        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Part deleted successfully!');
    }
}
