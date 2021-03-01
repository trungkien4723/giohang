<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class controller_product extends Controller
{  
    public function index()
    {   
        $products = product::Latest()->get();
        return view("productspage", compact('products')); 
    }

    public function addToCArt($id)
    {
        $product = product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }
        else
        {
            $cart[$id] = [
                'image' => $product->Product_Image,
                'name' => $product->Product_Name,
                'price' => $product->Product_Price,
                'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function showCart()
    {       
        $cart = session()->get('cart');
        return view("shoppingcart",compact('cart'));
    }
}
