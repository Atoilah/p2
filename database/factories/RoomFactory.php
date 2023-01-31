<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'tipeKamar' => Arr::random(['Superior','Deluxe', 'Reguler']),
            'foto' => $faker->name(),
            'harga' => $faker->numberBetween(1,10),
            'jumlah' => $faker->numberBetween(1,10),
        ];
    }
}
