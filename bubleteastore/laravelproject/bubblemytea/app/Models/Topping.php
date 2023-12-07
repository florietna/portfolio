<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public $timestamps = false;
}
