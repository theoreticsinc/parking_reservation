<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\BookConfirm;

use App\Models\CartItem;
use App\Models\Booking;
use App\Models\Product;  // Update this import statement

class HomeController extends Controller
{
    public function index()
    {
        $cartItem = Cart::add([
            'id' => '293ad',
            'name' => 'Product 1',
            'qty' => 1,
            'price' => 9.99,
            'options' => ['size' => 'large']
        ]);

        // Store the cart item in the database
        try {
            CartItem::create([
                'product_id' => $cartItem->id,
                'name' => $cartItem->name,
                'quantity' => $cartItem->qty,
                'price' => $cartItem->price,
                'options' => $cartItem->options,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        
        //$cartItem = Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large']);

        // Next we associate a model with the item.
        //Cart::associate($cartItem->rowId, 'Product');

        // Or even easier, call the associate method on the CartItem!
        //$cartItem->associate('Product');

        // You can even make it a one-liner
        //Cart::add('293ad', 'Product 1', 1, 9.99, ['size' => 'large'])->associate('Product');

        //Cart::instance('wishlist')->store('username');

        // Now, when iterating over the content of the cart, you can access the model.
        foreach (Cart::content() as $row) {
        //    echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
        }

        return view('home');
    }

    public function calendar() {
        $event = "Hoy World";
        return view('selectable', compact('event'));
    }

    public function modifyCalendar(Request $request) {
        $eventId = $request->input('eventId');
        
        $responseData = [
            'message' => 'Event modified successfully',
            'eventId' => $eventId,
            'data' => 'success?',
        ];
    
        return response()->json($responseData);
    }
    

}
