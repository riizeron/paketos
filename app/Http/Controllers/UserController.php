<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Paket;

class UserController extends Controller
{
    public function go(int $id) {
        $user = User::find($id);
        if ($user->orders == NULL) {
            $orders = NULL;
        } else {
            foreach(preg_split('/\s+/', $user->orders) as $order) {
                $orders[] = Cart::find($order);
            }
        }
        return view('user', ['user' => $user, 'orders' => $orders]);
    }

    public function cart($id) {
        $cart = Cart::find(User::find($id)->cart);
        // $items = array();
        
        if ($cart->items == NULL) {
            $items = NULL;
        } else {
            foreach(preg_split('/\s+/', $cart->items) as $item) {
                $items[] = Paket::find($item);
            }
        }
        return view('cart', ['items' => $items, 'cart' => $cart]);
    }
}
