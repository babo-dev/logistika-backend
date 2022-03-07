<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Company;
use App\Models\CustomRequest;
use App\Models\State;

class CustomRequestFactory extends Factory
{


  protected $model = CustomRequest::class;
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      "user_id" => User::inRandomOrder()->first(), //->create()->id,
      "date1" => $this->faker->dateTimeThisMonth($max = "now"),
      "date2" => $this->faker->dateTimeThisMonth($max = "now"),
      "title" => $this->faker->word(),
      "weight_min" => $this->faker->numerify("###kg"),
      "weight_max" => $this->faker->numerify("###kg"),
      "cubm_min" => $this->faker->word,
      "cubm_max" => $this->faker->word,
      "budget_min" => $this->faker->numerify("#### man"),
      "budget_max" => $this->faker->numerify("#### man"),
      "cargo_type" => $this->faker->word,
      "car_body" => $this->faker->word,
      "company_id" => Company::inRandomOrder()->first(), //->create()->id,
      /* "company_id" => Company::inRandomOrder()->first(),//->create()->id, */
      "note" => $this->faker->sentence(),
      "source" => State::inRandomOrder()->first(),
      "destination" => State::inRandomOrder()->first(),
      "status" => "0"
    ];
  }
}
