<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $this->call(EmpresaSeeder::class);
        $this->call(MisVisSeeder::class);
        $this->call(InicioSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SeoSeeder::class);
    }
}
