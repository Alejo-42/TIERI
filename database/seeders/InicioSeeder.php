<?php

namespace Database\Seeders;

use App\Models\Inicio;
use Illuminate\Database\Seeder;

class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Inicio::create([
            'image' =>'inicio.png',
            'title'=>'titulo',
            'class'=>'active',
            'description'=>'mensaje',
            'link' =>'url',
            'status'=>'activo'
        ]);
    }
}
