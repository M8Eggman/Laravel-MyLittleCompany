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
        return view('pages.back.team.liste', compact("employes"));
    }
    public function add_page()
    {
        return view('pages.back.team.add');
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
    public function show($id)
    {
        $employe = Employe::where("id", $id)->first();
        return view("pages.back.team.show", compact("employe"));
    }
    public function edit($id)
    {
        $employe = Employe::where("id", $id)->first();
        return view("pages.back.team.edit", compact("employe"));
    }
    public function update($id, Request $request)
    {
        Employe::where("id", $id)->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "numero_telephone" => $request->numero_telephone,
            "email" => $request->email,
            "poste" => $request->poste,
            "role" => $request->role,
            "salaire" => $request->salaire,
            "img" => $request->img,
            "updated_at" => now(),
        ]);
        // Deuxième méthode
        // $employe = Employe::findOrFail($id);
        // $employe->update($request->only([
        //     "nom",
        //     "prenom",
        //     "numero_telephone",
        //     "email",
        //     "poste",
        //     "role",
        //     "salaire",
        //     "img"
        // ]));
        return redirect()->route("employee_show_back", $id);
    }
}
