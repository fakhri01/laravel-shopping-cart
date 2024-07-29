<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['session_id', 'product_id', 'product_title', 'product_price', 'quantity'];

    public static function addProduct($product)
    {
        $cartItem = self::where('session_id', session()->getId())
            ->where('product_id', $product['id'])
            ->first();

        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->save();
        } else {
            self::create([
                'session_id' => session()->getId(),
                'product_id' => $product['id'],
                'product_name' => $product['name'],
                'product_price' => $product['price'],
                'quantity' => 1,
            ]);
        }
    }

    public static function deleteProduct($id)
    {
        $cartItem = self::where('session_id', session()->getId())
            ->where('product_id', $id)
            ->first();

        if ($cartItem) {
            $cartItem->delete();
        }
    }

    public static function countProducts()
    {
        return self::where('session_id', session()->getId())
            ->sum('quantity');
    }

    public static function getCart()
    {
        return self::where('session_id', session()->getId())
            ->get();
    }
}
