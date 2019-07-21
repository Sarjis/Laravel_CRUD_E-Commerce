<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    function addToCart(Request $request)
    {
        $product = Product::find($request->id);

        Cart::add([
            'id' => $request->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->quantity,
            'options'=>[
                'image'=>$product->product_image
            ]
        ]);
        return redirect('/cart/show');
        // return view('front-end.cart.add-to-cart');
    }

    function showCart()
    {
        $cartItems = Cart::content();
        return view('front-end.cart.show-cart', ['cartItems'=> $cartItems]);
    }

    function deleteCartItem($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    function updateCartItem(Request $request)
    {
        Cart::update($request->rowId,['qty'=>$request->qty]);
        return redirect('cart/show');
    }
}
