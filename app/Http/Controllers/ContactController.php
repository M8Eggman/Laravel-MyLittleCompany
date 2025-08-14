<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.front.contact');
    }
    public function store(Request $request)
    {
        $message = new Message();
        $message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->tel = $request->tel;
        $message->mail = $request->mail;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('contact_front')->with('success', 'Votre message a été envoyé !');
    }
    public function index_back()
    {
        $messages = Message::all();
        return view('pages.back.contact.liste', compact("messages"));
    }
    public function destroy($id)
    {
        $message = Message::where("id", $id);
        $message->delete();

        return redirect()->route("contact_back");
    }
    public function show($id)
    {
        $message = Message::where("id", $id)->first();
        return view("pages.back.contact.show", compact("message"));
    }
    public function edit($id)
    {
        $message = Message::where("id", $id)->first();
        return view("pages.back.contact.edit", compact("message"));
    }
    public function update($id, Request $request)
    {
        Message::where("id", $id)->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "tel" => $request->tel,
            "mail" => $request->mail,
            "sujet" => $request->sujet,
            "message" => $request->message,
            "updated_at" => now()
        ]);
        return redirect()->route("contact_show_back", $id);
    }
}
