<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function owner()
    {
        return $this->hasOneThrough(
            Account::class,
            AccountShop::class,
            'shop_id',
            'id',
            'id',
            'account_id'
        )->where('account_shop.role_id', 1);
    }
}
