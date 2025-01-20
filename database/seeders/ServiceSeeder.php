<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 5; $i++) { 
            Service::create([
                'title' => $faker->name,
                'description' => $faker->text,
                'image' =>  '20250116162144.png',
                'contact' =>$faker->phoneNumber,
                'link' => $faker->url,
            ]);
        }
    }
}
