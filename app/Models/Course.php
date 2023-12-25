<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //define relationships:
    public function instructor () {
        return $this->belongsTo(Instructor::class);
    }
    public function category () {
        return $this->belongsTo(Category::class);
    }
    public function sections () {
        return $this->hasMany(CourseSection::class);
    }
    public function reviews () {
        return $this->hasMany(CourseReview::class);
    }
    public function enrollements () {
        return $this->hasMany(Enrollement::class);
    }
}
