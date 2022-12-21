<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public function brands()
    {
        return $this->morphedByMany(Brand::class, 'applicable');
    }

    public function categories()
    {
        return $this->morphedByMany(Category::class, 'applicable');
    }

    public function items()
    {
        return $this->morphedByMany(Item::class, 'applicable');
    }

    public function customers()
    {
        return $this->morphedByMany(Customer::class, 'applicable');
    }
}
