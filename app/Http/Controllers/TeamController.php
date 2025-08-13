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
    public function index_back()
    {
        $employes = Employe::all();
        return view('pages.back.team', compact("employes"));
    }
    public function add_page()
    {
        return view('pages.back.add_team');
    }
    public function store(Request $request)
    {
        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->numero_telephone = $request->numero_telephone;
        $employe->email = $request->email;
        $employe->poste = $request->poste;
        $employe->role = $request->role;
        $employe->salaire = $request->salaire;
        $employe->img = $request->img;
        $employe->save();

        return redirect()->route("employee_back");
    }
    public function destroy($id)
    {
        $employe = Employe::where("id", $id);
        $employe->delete();

        return redirect()->route("employee_back");
    }
}
