<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'user_id' => 1,
            'bio' => '',
            'experience' => '',
            'experience_summary' => '',
            'profile_picture' => '',
        ]);
    }
}
