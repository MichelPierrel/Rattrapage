<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nom_ent' => ('focalys'),
            'secteur_ent' => ('informatique'),
            'adresse_ent' => $this->faker->address,
            'stagiaire_pris' => $this->faker->numberBetween(0,3),
            'note_stagiaire_ent' => $this->faker->numberBetween(0,3),
            'note_pilote_ent' => $this->faker->numberBetween(0,3),
            'created_at' => now(),
        ];
    }

}
