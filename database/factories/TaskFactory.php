<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" =>  fake()->text('15'), 
            "description" =>  fake()->text('100'), 
            "due_date" =>  date('y-m-d'), 
            "user_id" =>   rand(1 , 10)

        ];
    }
}
