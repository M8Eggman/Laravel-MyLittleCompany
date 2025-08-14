<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        Employe::insert([
            [
                "nom" => "Dubois",
                "prenom" => "Pierre",
                "numero_telephone" => "0612457896",
                "email" => "pierre.dubois@entreprise.com",
                "poste" => "Logistique",
                "role" => "Ouvrier polyvalent",
                "salaire" => 1850.00,
                "img" => "pierre_dubois.jpg",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Lefevre",
                "prenom" => "Sophie",
                "numero_telephone" => "0645123987",
                "email" => "sophie.lefevre@entreprise.com",
                "poste" => "Vente",
                "role" => "Employé polyvalent",
                "salaire" => 2100.00,
                "img" => "sophie_lefevre.jpg",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Morel",
                "prenom" => "Julien",
                "numero_telephone" => "0678541239",
                "email" => "julien.morel@entreprise.com",
                "poste" => "Comptabilité",
                "role" => "Comptable",
                "salaire" => 2500.00,
                "img" => "julien_morel.jpg",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Roux",
                "prenom" => "Claire",
                "numero_telephone" => "0654789321",
                "email" => "claire.roux@entreprise.com",
                "poste" => "Réception",
                "role" => "Assistant du régional manager",
                "salaire" => 2300.00,
                "img" => "claire_roux.jpg",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Bernard",
                "prenom" => "Luc",
                "numero_telephone" => "0621457893",
                "email" => "luc.bernard@entreprise.com",
                "poste" => "Direction",
                "role" => "Régional manager",
                "salaire" => 3500.00,
                "img" => "luc_bernard.jpg",
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
