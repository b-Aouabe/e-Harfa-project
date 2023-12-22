<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function courses () {
        $this->hasMany(Course::class);
    }

    public function user () {
        $this->hasOne(User::class);
    }

}
