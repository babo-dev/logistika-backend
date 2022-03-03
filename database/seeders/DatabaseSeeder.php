<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Country::factory(10)->create();
        \App\Models\State::factory(10)->create();
        \App\Models\TechniqueType::factory(10)->create();
        \App\Models\User::factory()->count(10)->create(); 
        \App\Models\Company::factory(10)->create();
        \App\Models\CustomRequest::factory(40)->create();
        /* \App\Models\CustomRoute::factory(50)->create(); */
    }
}
