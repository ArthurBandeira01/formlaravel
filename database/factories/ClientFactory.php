<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

require_once __DIR__ . '/../faker_data/document_number.php';

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
 class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    $factory->define(\App\Models\Client::class, function (Faker $faker){
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'defaulter' => rand(0, 1),
        ];
    });
    
    $factory->state(\App\Models\Client::class,\App\Models\Client::TYPE_INDIVIDUAL, function (Faker $faker) {
        $cpfs = cpfs();
        return [
            'date_birth' => $faker->date(),
            'document_number' => $cpfs[array_rand($cpfs,1)],
            'sex' => rand(1, 10) % 2 == 0 ? 'm' : 'f',
            'marital_status' => rand(1, 3),
            'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null,
            'client_type' => \App\Client::TYPE_INDIVIDUAL
        ];
    });
    
    $factory->state(\App\Models\Client::class,\App\Models\Client::TYPE_LEGAL, function (Faker $faker) {
        $cnpjs = cnpjs();
        return [
            'document_number' => $cnpjs[array_rand($cnpjs,1)],
            'company_name' => $faker->company,
            'client_type' => \App\Client::TYPE_LEGAL
        ];
    });

    return [
            
        ];
    }  
}
