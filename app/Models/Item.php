<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected static function booted()
    {
        if (request()->routeIs('item')) {
            static::addGlobalScope('instock', function (Builder $builder) {
                $builder->where('state', config('enum.item_state.IN_STOCK'));
            });
        }
    }

    public function scopeDefault($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopePopular($query)
    {
        return $query->orderBy('sold', 'desc');
    }

    public function scopeNewArrivals($query)
    {
        return $query->where('TIMESTAMPDIFF(month, created_at, ', now(), ')', '<=', 1);
    }

    public function scopeAvgRating($query)
    {
        return $query->orderBy('avg_rating', 'desc');
    }

    public function scopeTopRated($query)
    {
        return $query->where('avg_rating', '>=', 4.5);
    }

    public function scopeDeal($query)
    {
        return $query->where('deal', '>', 0);
    }

    public function scopeSort($query, array $sorts)
    {
        // $query->where('state', )
        $query->when(
            $sorts['default'] ?? false,
            fn ($query) => $query->default()
        );

        $query->when(
            $sorts['popular'] ?? false,
            fn ($query) => $query->popular()
        );

        $query->when(
            $sorts['latest'] ?? false,
            fn ($query) => $query->latest()
        );

        $query->when(
            $filters['price'] ?? false,
            fn ($query, $price = 'desc') => $query->orderBy('sold', $price)
        );
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $sorts['new-arrivals'] ?? false,
            fn ($query) => $query->new()
        );

        $query->when(
            $sorts['top-rated'] ?? false,
            fn ($query) => $query->topRated()
        );

        $query->when(
            $sorts['deal'] ?? false,
            fn ($query) => $query->deal()
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('title', $category)
            )
        );

        $query->when(
            $filters['brand'] ?? false,
            fn ($query, $brand) =>
            $query->whereHas(
                'brand',
                fn ($query) =>
                $query->where('title', $brand)
            )
        );
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'source');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }

    public function coupons()
    {
        return $this->morphMany(Coupon::class, 'applicable');
    }
}
