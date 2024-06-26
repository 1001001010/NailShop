<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
