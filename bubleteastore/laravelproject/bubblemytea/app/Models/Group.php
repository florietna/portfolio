<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function order_group()
    {
        return $this->belongsToMany(Order_Group::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function group_volume()
    {
        return $this->hasOne(Group_Volume::class);
    }

    public $timestamps = false;
}
