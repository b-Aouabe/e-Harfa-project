<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollement extends Model
{
    use HasFactory;


    //define relationships:
    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course () {
        return $this->belongsTo(Course::class);
    }
}
