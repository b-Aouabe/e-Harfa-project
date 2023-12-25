<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;


    //define relationships
    public function owner () {
        return $this->belongsTo(User::class);
    }
    public function reviews () {
        return $this->hasMany(AchievementReview::class);
    }
}
