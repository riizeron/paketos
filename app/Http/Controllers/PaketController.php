<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class PaketController extends Controller
{
    public function go(int $id) {
        $paket = Paket::find($id);
        if ($paket->reviews == NULL) {
            $reviews = NULL;
        } else {
            foreach(preg_split('/\s+/', $paket->reviews) as $review) {
                $reviews[] = Review::find($review);
            }
        }
        return view('paket', ['paket' => $paket, 'reviews' => $reviews]);
    } 

    public function check(Request $request) {
        $request->validate([
            "name" => 'required|min:2',
            "price" => 'required|regex:/^\d+[.]{0,1}\d*$/i',
            "amount" => 'required|regex:/^\d+$/i',
            "description" => 'required|min:5',
            "image" => 'required|max:2048'
        ]);
        
        $paket = new Paket();
        $paket->name = $request->input('name');
        $paket->description = $request->input('description');
        $paket->price = $request->input('price');
        $paket->amount = $request->input('amount');
        $paket->category = $request->input('category');
        $paket->vendor = Auth::user()->email;
        // $paket->reviews = [];
        $paket->image = $request->file('image')->store('images', 'public');

        $paket->save();

        return redirect()->route('catalog');
    }

    public function add() {
        return view('add_paket');
    }
}
