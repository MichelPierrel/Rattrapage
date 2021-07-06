<?php

namespace Database\Factories;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'duree_stage' => $this->faker->numberBetween(1,5),
            'renumeration' => $this->faker->numberBetween(500,1500),
            'nb_place' => $this->faker->numberBetween(0,3),
            'competence' => ('C++,SQL,JS'),
            'created_at' => now(),

        ];
    }


}
