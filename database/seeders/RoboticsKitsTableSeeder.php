<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitsTableSeeder extends Seeder
{
    public function run()
    {
        RoboticsKit::create(['name' => 'StarterKit']);
        RoboticsKit::create(['name' => 'Educational Robotics Kit']);
        RoboticsKit::create(['name' => 'Kit5']);
    }
}

