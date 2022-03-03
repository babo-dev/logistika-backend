<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* \App\Models\Admin::factory(50)->create(); */
        \App\Models\Admin::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("adminlogistika"), 
        ]);
    }
}
