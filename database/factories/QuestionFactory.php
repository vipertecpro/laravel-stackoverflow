<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        return [
            'title'   => rtrim($this->faker->sentence(random_int(5,10)),"."),
            'body'    => $this->faker->paragraphs(random_int(3,7),true),
            'views'   => random_int(0,10),
            'answers' => random_int(0,10),
            'votes'   => random_int(-3,10),
        ];
    }
}
