<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Http\Controllers\Controller;


class ShoppingCartController extends Controller
{

    private static $initialized = false;

    public function __construct()
    {
        if (!self::$initialized) {
            $this->initializeOnce();
            self::$initialized = true;
        }
    }

    private function initializeOnce()
    {
        /*
        $cartItem = Cart::add([
            'id' => '293',
            'name' => 'Product 1',
            'qty' => 1,
            'price' => 9.99,
            'options' => ['size' => 'large','color' => 'black']            
        ]);
        $itemQuantity = $cartItem->qty;
        */
    }

    public function index()
    {
        $cartItems = Cart::content();

        return view('cart.index', compact('cartItems'));
    }

    public function startShopping() {

        $cartItems = Cart::content();
        // Example query
        //$cartItems = CartItem::with('model')->get();
        //$cartItems = Cart::content()->load('product');


        return view('cart.index', compact('cartItems'));

    }

    public function initcart() {
     if (!Cache::has('initCart')) {
        
        Cache::put('initCart', true, now()->addDay());
    }
        
        $cartItems = Cart::content();

        return view('cart.index', compact('cartItems'));   
    }

    public function save2cart() {

// Add an item to the cart
        
        try {
        // Store the cart item in the database
        
            CartItem::create([
                'product_id' => $cartItem->id,
                'name' => $cartItem->name,
                'qty' => $cartItem->qty,
                'price' => $cartItem->price,
                'options' => $cartItem->options,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
               
/*
        //Cart::instance('wishlist')->store('username');
        $item = Cart::get(1);

        if ($item) {
            // Access the 'name' property
            $itemName = $item->name;
        } else {
            // Now, when iterating over the content of the cart, you can access the model.
            foreach (Cart::content() as $row) {
                echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
            }
        }
        */

        
    }


    /**
     * Add a product to the shopping cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $productId)
    {
        //dd($productId);
        $product = Product::findOrFail($productId);

        Cart::add($product->id, $product->name, 1, $product->price)->associate(Product::class);
          

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
