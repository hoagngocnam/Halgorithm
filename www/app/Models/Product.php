<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'original_price',
        'promotional_price',
        'rating',
        'posts',
        'picture',
        'account_id',
        'view'
    ];

//    public function scopeActive($query)
//    {
//        return $query->where('votes', '>', 100);
//    }
//
//    //===========================================
//
//    protected function picture(): Attribute
//    {
//        return Attribute::make(
//            static fn(
//                $value
//            ) => empty($value) ? DEFAULT_IMAGE : DEFAULT_IMAGE,
//        );
//    }

//    protected function rating(): Attribute
//    {
//        return Attribute::make(
//            static fn(
//                $value
//            ) => $value / 10,
//        );
//    }

//    protected function originalPrice(): Attribute
//    {
//        return Attribute::make(
//            static fn(
//                $value
//            ) => money_vnd($value),
//        );
//    }

//    protected function promotionalPrice(): Attribute
//    {
//        return Attribute::make(
//            static fn(
//                $value
//            ) => money_vnd($value),
//        );
//    }

//    protected function percentPromotion(): Attribute
//    {
//        return Attribute::make(
//            static fn($value) => ucfirst($value),
//        );
//    }

    //===========================================

    //======== Relationships ========
    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

//    public function multimedia()
//    {
//        return $this->hasMany(Multimedia::class, 'product_id', 'id');
//    }
    //======== Relationships ========
}
