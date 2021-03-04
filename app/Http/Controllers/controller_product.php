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
        //session()->flush();
        $products = product::Latest()->get();
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
        $cart = session()->get('cart');
        $cartComponent = view("components.product_component", compact('cart','products'))->render();
        return response()->json([
            'product_component' => $cartComponent,
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function showCart()
    {       
        $cart = session()->get('cart');
        return view("shoppingcart",compact('cart'));
    }

    public function deleteCart(Request $request)
    {       
        if($request->id)
        {
            $cart = session()->get('cart');
            unset($cart[$request->id]);
            session()->put('cart', $cart);
            $cart = session()->get('cart');
            $cartComponent = view("components.cart_component", compact('cart'))->render();
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200
            ], 200);
        }
    }

    public function updateCart(Request $request)
    {       
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            $cart = session()->get('cart');
            $cartComponent = view("components.cart_component", compact('cart'))->render();
            return response()->json([
                'cart_component' => $cartComponent,
                'code' => 200
            ], 200);
        }
    }
}