<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('pages.front.product', compact('produits'));
    }
    public function index_back()
    {
        $produits = Produit::all();
        return view('pages.back.product', compact('produits'));
    }
    public function add_page()
    {
        return view('pages.back.add_product');
    }
}
