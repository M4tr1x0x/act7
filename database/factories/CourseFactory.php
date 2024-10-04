<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\RoboticsKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'cover' => $this->faker->imageUrl(640, 480, 'education', true),
            'content' => $this->faker->paragraph,
            'kit_id' => RoboticsKit::inRandomOrder()->first()->id,  
        ];
    }
}
