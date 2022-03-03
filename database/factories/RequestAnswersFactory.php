<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CustomRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestAnswersFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      "company_id" => Company::inRandomOrder()->first(), //->create()->id,
      "request_id" => CustomRequest::inRandomOrder()->first(),
      "price" => $this->faker->randomDigit(),
      "status" => $this->faker->randomElement([0,1,2]),
      "note" => $this->faker->sentence(),
    ];
  }
}
