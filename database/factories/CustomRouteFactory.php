<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;
use App\Models\CustomRoute;
use App\Models\State;

class CustomRouteFactory extends Factory
{
    protected $model = CustomRoute::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "company_id" => Company::inRandomOrder()->first(),//->create()->id,
            "date1" => $this->faker->dateTimeThisMonth($max = "now"),
            "date2" => $this->faker->dateTimeThisMonth($max = "now"),
            "car_body" => $this->faker->word,
            "note" => $this->faker->sentence(),    
            "source" => State::inRandomOrder()->first(),
            "destination" => State::inRandomOrder()->first(),
        ];
    }
}
