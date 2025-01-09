<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'image' =>'inicio.png',
            'title'=>'titulo',
            'description'=>'mensaje',
            'link' =>'url',
            'status'=>'activo'
        ]);
    }
}
