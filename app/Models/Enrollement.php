<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollement extends Model
{
    use HasFactory;

    public function student () {
        $this->belongsTo(User::class);
    }

    public function course () {
        $this->belongsTo(Course::class);
    }
}
