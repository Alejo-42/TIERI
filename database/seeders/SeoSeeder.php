<?php

namespace Database\Seeders;

use App\Models\SEO;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SEO::create([
            'title' => 'TIERI',
            'description' =>'Tu ferretería eléctrica de confianza. Encuentra una amplia gama de productos eléctricos de alta calidad para tus proyectos de hogar, industria y comercio. Desde cableado y conectores hasta luminarias y herramientas, tenemos todo lo que necesitas.',
            'keywords' =>'ferretería eléctrica, productos eléctricos, materiales eléctricos, cableado eléctrico, conectores eléctricos, luminarias, herramientas eléctricas, hogar, industria, comercio'
        ]);
    }
}
