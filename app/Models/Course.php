<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;  // Agrega esta línea

    public function kit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}

