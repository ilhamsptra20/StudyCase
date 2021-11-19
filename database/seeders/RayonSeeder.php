<?php

namespace Database\Seeders;

use App\Models\Rayon;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rayon::create([
            'name' => 'hehe',
            'mentor' => 'hehe',
            'slug' => 'hehe',
        ]);
    }
}
