<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected  $guarded = [];

    //define the eloquent relationships
    public function courseSection () {
        return $this->belongsTo(CourseSection::class);
    }
    public function questions () {
        return $this->hasMany(Question::class);
    }
}
