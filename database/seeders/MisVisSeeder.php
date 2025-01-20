<?php

namespace Database\Seeders;

use App\Models\MisVis;
use Illuminate\Database\Seeder;

class MisVisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <3 ; $i++) { 
            MisVis::create([
                'name' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magni alias quisquam nostrum modi pariatur repellat hic eligendi consequatur quae corporis dignissimos, nam incidunt laborum eius, et aspernatur ipsam fugit?',
                'image' =>'20250116162144.png',
                'status'=>'activo'
            ]);
        }
    }
}
