<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;
use Illuminate\Support\Arr;

class TransactionFactory extends Factory
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
            'namaPemesan' => $faker->name(1,10),
            'email' => $faker->safeEmail(),
            'telp' => $faker->phoneNumber(),
            'namaTamu' => $faker->name(),
            'room_id' => $faker->numberBetween(1,3),
            'cekIn' => $faker->dateTimeBetween('now','+01 days'),
            'cekOut' => $faker->dateTimeBetween('now','+01 days'),
            'jumlah' => $faker->numberBetween(1,10),
        ];
    }
}
