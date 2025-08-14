<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        Produit::insert([
            [
                "nom" => "Chaise en bois",
                "type" => "Mobilier",
                "descriptif" => "Chaise classique en bois massif",
                "img" => "chaise.jpg",
                "prix" => 59.90,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Table de salle à manger",
                "type" => "Mobilier",
                "descriptif" => "Table rectangulaire 6 places",
                "img" => "table.jpg",
                "prix" => 199.99,
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "nom" => "Lampe LED",
                "type" => "Éclairage",
                "descriptif" => "Lampe de bureau moderne",
                "img" => "lampe.jpg",
                "prix" => 29.99,
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
