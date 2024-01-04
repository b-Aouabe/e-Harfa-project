<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $guarded = [];

    //define the eloquent relationships
    public function owner () {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function orderItems () {
        return $this->hasMany(OrderItem::class);
    }
}
