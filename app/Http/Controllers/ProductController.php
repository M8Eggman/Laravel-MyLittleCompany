<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Str;

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
        return view('pages.back.product.liste', compact('produits'));
    }
    public function add_page()
    {
        return view('pages.back.product.add');
    }
    public function store(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->type = $request->type;
        $produit->descriptif = $request->descriptif;
        $produit->prix = $request->prix;

        if ($request->hasFile("img")) {
            $file = $request->file("img");
            // Récupère le nom du fichier sans l'extension
            $original_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // Concatène: la date d'aujourd'hui, un id unique, le nom original url friendly et l'extension original.
            $file_name = date('Y_m_d_His') . '_' . uniqid() . '_' . Str::slug($original_name) . "." . $file->getClientOriginalExtension();
            $file_path = $file->storeAs("produits", $file_name, "public");
            $produit->img = $file_path;
            $produit->save();
        }

        return redirect()->route('product_back');
    }

    public function destroy($id)
    {
        $produit = Produit::where('id', $id)->first();
        $produit->delete();

        return redirect()->route('product_back');
    }
    public function show($id)
    {
        $product = Produit::where("id", $id)->first();
        return view("pages.back.product.show", compact("product"));
    }
    public function edit($id)
    {
        $product = Produit::where("id", $id)->first();
        return view("pages.back.product.edit", compact("product"));
    }
    public function update($id, Request $request)
    {
        Produit::where("id", $id)->update([
            "nom" => $request->nom,
            "type" => $request->type,
            "descriptif" => $request->descriptif,
            "img" => $request->img,
            "prix" => $request->prix,
            "updated_at" => now()
        ]);
        return redirect()->route("product_show_back", $id);
    }
}
