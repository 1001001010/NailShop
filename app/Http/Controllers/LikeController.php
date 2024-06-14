<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Basket;
use Auth;

class LikeController extends Controller
{
    public function add_liked($product_id)
    {
        // Добавление в избранное
        $status = Like::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
        if ($status) {
            Like::where('id', $status->id)->delete();
        }
        else {
            $data = [
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
            ];
            Like::create($data);
        }
        return redirect()->back();
    }
    public function open_liked()
    {
        //Открытие избранных
        $likes = Like::with('products')->where('user_id', Auth::user()->id)->get();  
        return view('favourites', ['likes' => $likes]);
    }

    public function add_basket($product_id)
    {
        // Добавление в корзину
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $product_id,
        ];
        Basket::create($data);
        return redirect()->back();
    }

    public function open_basket()
    {
        // Открытие корзины
        $baskets = Basket::with('products')->where('user_id', Auth::user()->id)->get();  
        $summ = 0; 
        foreach ($baskets as $basket) {
            foreach ($basket->products as $position) {
                $summ += $position->price;
            }
        };
        return view('basket', ['baskets' => $baskets, 'summ' => $summ]);
    }
    public function delete_basket($basket_id)
    {
        Basket::where('id', $basket_id)->delete();
        return redirect()->back();
    }
}
