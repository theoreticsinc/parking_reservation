<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    /**
     * Display the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();

        return view('cart.index', compact('cartItems'));
    }

    public function startShopping() {

        $cartItems = Cart::content();

        return view('cart.index', compact('cartItems'));

    }

    /**
     * Add a product to the shopping cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate(Product::class);

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully');
    }

    /**
     * Remove an item from the shopping cart.
     *
     * @param  int  $rowId
     * @return \Illuminate\Http\Response
     */
    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);

        return redirect()->route('cart.index')->with('success', 'Item removed from cart successfully');
    }

    /**
     * Clear all items from the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function clearCart()
    {
        Cart::destroy();

        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully');
    }
}
