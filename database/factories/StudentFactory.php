<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name(),
            'class'           => $this->faker->numberBetween(7, 10),
            'course_teacher'  => $this->faker->name(),
            'address'         => $this->faker->address()
        ];
    }
}
