<?php

namespace Database\Seeders;

use App\Models\HomeSlide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlide::create([
            'title'       => 'I will give you Best Product in the shortest time.',
            'description' => 'Im a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences',
            'home_slide'  => '',
            'video_url'   => 'https://www.youtube.com/watch?v=mh45igK4Esw',
        ]);
    }
}
