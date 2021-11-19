<?php

namespace Database\Seeders;

use App\Models\Rombel;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rombel::create([
            'name' => 'hehe',
            'slug' => 'hehe',
        ]);
    }
}
