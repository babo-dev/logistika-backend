<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Technique::factory(50)->create();
    }
}
