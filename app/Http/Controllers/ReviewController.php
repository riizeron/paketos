<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function check(Request $request, int $id) {
        $request->validate([
            "rating" => 'required',
            "message" => 'required|min:3|max:500'
        ]);
        $review = new Review();
        $review->user = Auth::user()->id;
        $review->subject = $request->input('rating');
        $review->message = $request->input('message');
        $review->paket = $id;
        $review->save();

        $paket = Paket::find($id);
        if  ($paket->reviews == NULL) {
            $paket->reviews = strval($review->id);
        } else {
            $paket->reviews = $paket->reviews." ";
            $paket->reviews = $paket->reviews.$review->id;
        }
        $paket->update();

        return redirect()->route('paket',['id' => $id]);
    } 
}
