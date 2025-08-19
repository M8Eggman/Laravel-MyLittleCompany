<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = \App\Models\Message::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'tel' => $this->faker->phoneNumber(),
            'mail' => $this->faker->safeEmail(),
            'sujet' => $this->faker->sentence(3),
            'message' => $this->faker->paragraph(2)
        ];
    }
}
