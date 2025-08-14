<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        Message::insert([
            [
                "prenom" => "Jean",
                "nom" => "Dupont",
                "tel" => "0612345678",
                "mail" => "jean.dupont@example.com",
                "sujet" => "Demande de devis",
                "message" => "Bonjour, je souhaite obtenir un devis pour vos services.",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "prenom" => "Marie",
                "nom" => "Curie",
                "tel" => "0678901234",
                "mail" => "marie.curie@example.com",
                "sujet" => "Question produit",
                "message" => "Pouvez-vous m’en dire plus sur la garantie de vos produits ?",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "prenom" => "Paul",
                "nom" => "Martin",
                "tel" => "0654321098",
                "mail" => "paul.martin@example.com",
                "sujet" => "Service client",
                "message" => "J’ai un problème avec ma dernière commande.",
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
