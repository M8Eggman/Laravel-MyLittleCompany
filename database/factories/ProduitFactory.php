<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    protected $model = \App\Models\Produit::class;

    public function definition()
    {
        $types = ['Électronique', 'Vêtements', 'Alimentation', 'Maison', 'Sport'];

        return [
            'nom' => $this->faker->word() . ' ' . $this->faker->unique()->numberBetween(1, 1000),
            'type' => $this->faker->randomElement($types),
            'descriptif' => $this->faker->sentence(1),
            'prix' => $this->faker->randomFloat(2, 5, 500),
            'img' => 'https://picsum.photos/seed/' . $this->faker->unique()->numberBetween(1001, 2000) . '/300/300'
        ];
    }
}
