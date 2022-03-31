<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Paket;

class CartController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function add($paket) {
        $cart = Cart::find(Auth::user()->cart);
        if ($cart->items == NULL) {
            $cart->items = $paket;
        } else {
            $cart->items = $cart->items." ";
            $cart->items = $cart->items.$paket;
        }
        $cart->price = $cart->price + Paket::find($paket)->price;
        $cart->update();

        return redirect('catalog');
    }

    public function del($id, $paket) {
        $cart = Cart::find(Auth::user()->cart);
        $cart->items = str_replace(strval($paket), '', $cart->items);
        $cart->update();

        return redirect(route('cart', Auth::user()->id));
    }

    public function checkout() {
        $user = User::find(Auth::user()->id);
        if ($user->orders == NULL) {
            $user->orders = $user->cart;
        } else {
            $user->orders = $user->orders." ";
            $user->orders = $user->orders.$user->cart;
        }
        $new_cart = new Cart();
        $new_cart->save();
        $cart = Cart::find($user->cart);
        $cart->update();
        $user->cart = $new_cart->id;
        $user->update();
        
        return redirect(route('cart', $user->id));
    }
}
