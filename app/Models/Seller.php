<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use App\Models\Product;

// class Seller extends User
class Seller extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
