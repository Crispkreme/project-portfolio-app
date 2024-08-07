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
            'title'       => 'title',
            'description' => 'description',
            'home_slide'  => '',
            'video_url'   => 'video_url',
        ]);
    }
}
