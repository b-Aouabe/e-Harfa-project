<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementReview extends Model
{
    use HasFactory;

    //define relationships
    public function reviewer () {
        return $this->belongsTo(User::class);
    }

    public function acheivement () {
        return $this->belongsTo(Achievement::class);
    }
}
