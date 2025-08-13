<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $employes = Employe::all();
        $produits = Produit::all();
        return view('home', compact("employes", "produits"));
    }
}
