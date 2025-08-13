<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class TeamController extends Controller
{
      public function index()
    {
        $employes = Employe::all(); 
        return view('pages.front.team', compact("employes"));
    }
}
