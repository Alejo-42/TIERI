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
            'correo1' =>'tieri.electrico@gmail.com',
            'correo2' =>'cafivi.pr@hotmail.com',
            'numero1'=>'0997030418',
            'numero2'=>'0999552099',
            'imagen_fondo'=> '20250109151658.jpg',
            'logo'=>'20250109151243.jpeg',
            'direccion'=>'Avenida Humberto Albornoz Oe9-112 y Antonio Herrera, Quito',
            'georeferencia'=>'https://www.google.com/maps/embed?pb=!3m2!1ses!2sec!4v1736190144110!5m2!1ses!2sec!6m8!1m7!1sn2lbpvv0q0LxI11sosil9A!2m2!1d-0.1896356495357802!2d-78.51064984656831!3f344.597202581761!4f10.932724847233942!5f0.7820865974627469'
        ]);
    }
}
