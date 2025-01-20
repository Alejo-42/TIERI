<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Herramientas;
use Faker\Factory as Faker;

class HerramientasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            Herramientas::create([
                'name' => 'Herramientas',
                'description' => $faker->paragraph,
                'image' => '20250116162144.png',
                'stock' => $faker->numberBetween(10, 20),
                'price' => $faker->numberBetween(10, 100)
            ]);
        }
    }
}
