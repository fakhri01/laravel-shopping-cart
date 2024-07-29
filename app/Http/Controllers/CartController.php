<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = $request->all();
        Cart::addProduct($product);

        return response()->json(['message' => 'Product added to cart successfully.']);
    }

    public function deleteProduct($id)
    {
        Cart::deleteProduct($id);

        return response()->json(['message' => 'Product removed from cart successfully.']);
    }

    public function countProducts()
    {
        $count = Cart::countProducts();

        return response()->json(['count' => $count]);
    }

    public function getCart()
    {
        $cart = Cart::getCart();

        return response()->json($cart);
    }
}
