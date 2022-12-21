<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->morphOne(Image::class, 'source');
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function coupons()
    {
        return $this->morphToMany(Coupon::class, 'applicable');
    }
}
