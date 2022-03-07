<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\TechniqueType;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechniqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "company_id" => Company::inRandomOrder()->first(),//->create()->id,
            "technique_type_id" => TechniqueType::inRandomOrder()->first(),//->create()->id,
            "state_id" => State::inRandomOrder()->first(),//->create()->id,
            "title" => $this->faker->word(),
            "owner" => $this->faker->word(),
            "price" => $this->faker->numerify("#### man"),
            "description" => $this->faker->sentence(),
        ];
    }
}
