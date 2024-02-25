<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $villes = Ville::pluck('id')->toArray();

        return [
            'nom' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'adresse' => $this->faker->address,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'date_de_naissance' => $this->faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d'),
            'ville_id' => $this->faker->randomElement($villes)
        ];
        
    }
}