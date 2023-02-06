<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected function fullName(): Attribute
    {
        return Attribute::make(
            fn() => $this->first_name . ' ' . $this->last_name
        );
    }
}
