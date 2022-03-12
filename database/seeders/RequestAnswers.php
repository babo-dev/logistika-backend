<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestAnswers extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    \App\Models\RequestAnswers::factory(50)->create();
  }
}
