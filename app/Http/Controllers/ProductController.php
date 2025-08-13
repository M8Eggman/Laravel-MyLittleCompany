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
    public function store(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->type = $request->type;
        $produit->descriptif = $request->descriptif;
        $produit->prix = $request->prix;
        $produit->img = $request->img;
        $produit->save();

        return redirect()->route('product_back');
    }

    public function destroy($id)
    {
        $produit = Produit::where('id', $id)->first();
        $produit->delete();

        return redirect()->route('product_back');
    }
}
