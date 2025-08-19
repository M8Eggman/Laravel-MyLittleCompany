<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Storage;

class EmployeFactory extends Factory
{
    protected $model = \App\Models\Employe::class;

    public function definition()
    {
        $postes = ["Logistique", "Réception", "Comptabilité", "Vente", "Direction"];
        $roles = ["Ouvrier polyvalent", "Employé polyvalent", "Comptable", "Assistant du régional manager", "Régional manager"];

        $images = Storage::disk('public')->files('employes');

        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'numero_telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'poste' => $this->faker->randomElement($postes),
            'role' => $this->faker->randomElement($roles),
            'salaire' => $this->faker->randomFloat(2, 1000, 8000),
            'img' => $this->faker->randomElement($images)
        ];
    }
}
