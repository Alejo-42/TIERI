<?php

namespace Database\Seeders;

use App\Models\empresa;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empresa::create([
            'correo1' =>'correo@atlast.ec',
            'correo2' =>'correo@atlast.ec',
            'numero1'=>'0991746109',
            'numero2'=>'0991746100',
            'imagen_fondo'=> 'imagen_fondo.png',
            'logo'=>'logo.png',
            'direccion'=>'Av.Jose Sanchez y Mariscal Sucre',
            'georeferencia'=>'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3989.8073975324373!2d-78.49930590674215!3d-0.1340690009127936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1735457876912!5m2!1ses!2sec'
        ]);
    }
}
