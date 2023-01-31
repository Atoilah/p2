<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

class FacilityHotelFactory extends Factory
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
            'namaFasilitas' => $faker->name(),
            'keterangan' => $faker->name(),
            'foto' => $faker->name(),
        ];
    }
}
