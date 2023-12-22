<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function instructor () {
        $this->belongsTo(Instructor::class);
    }

    public function reviews () {
        $this->hasMany(CourseReview::class);
    }

    public function enrollements () {
        $this->hasMany(Enrollement::class);
    }
}
