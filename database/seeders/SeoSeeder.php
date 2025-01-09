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
            'title' => 'title',
            'description' =>'description',
            'keywords' =>'keywords'
        ]);
    }
}
