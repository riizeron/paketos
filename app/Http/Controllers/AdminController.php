<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Paket;

class AdminController extends Controller
{
    public function userlist() {
        $users = new User();
        return view('userlist', ['users' => $users->all()]);
    }

    public function orderlist() {
        $userr = new User();
        $users = $userr->all();
        foreach($users as $user) {
            if ($user->orders != NULL) {
                foreach(preg_split('/\s+/', $user->orders) as $order) {
                    $orders[] = Cart::find($order);
                }
            }
        }

        return view('orderlist', ['orders' => $orders, 'users' => $users]);
    }

    public function cart($id) {
        $cart = Cart::find($id);
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
