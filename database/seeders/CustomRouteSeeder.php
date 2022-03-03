<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CustomRoute::factory(50)->create();
    }
}
