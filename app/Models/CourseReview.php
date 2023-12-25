<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseReview extends Model
{
    use HasFactory;

    //define relationships:
    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function reviewer () {
        return $this->belongsTo(User::class);
    }

}
