<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class CatalogController extends Controller
{
    public function load() {
        $pakets = new Paket();
        return view('catalog', ['pakets' => $pakets->all(), 'category' => 'All']);
    }

    public function category($category) {
        $pakets = new Paket();
        return view('catalog', ['pakets' => $pakets::where('category', $category)->get(), 'category' => $category]);
    }
}
