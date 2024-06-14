<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin', ['products' => $products]);
    }

    public function new_product(Request $request) 
    {
        // Добавление ноового товара
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'price' => 'required|integer',
            'brand' => 'required|string',
            'color' => 'required|string',
            'volume' => 'required|string',
        ]);
    
        // Сохранение фото
        $name = time(). "." . $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => 'storage/products/' . $name,
            'brand' => $request->brand,
            'color' => $request->color,
            'volume' => $request->volume
        ];
        Product::create($data);

        return redirect()->back();
    }
    public function delete_product($product_id)
    {
        // Удаление товара
        $position = Product::where('id', $product_id)->first();
        if ($position->photo) {
            File::delete(public_path($position->photo));
        }
        Product::where('id', $product_id)->delete();
        return redirect()->back();
    }
}
