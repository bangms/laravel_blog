<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'writer'=> 'user01',
            'subject'=> $this->faker->text(15),
            'content'=> $this->faker->text(100),
            'created_at'=> now(),
        ];
    }
}
