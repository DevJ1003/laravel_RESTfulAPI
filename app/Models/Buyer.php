<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


// use App\Models\Transaction;
// use App\Models\User;

// class Buyer extends User
class Buyer extends Model
{
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
        // this shows that a user may have many transactions
    }
}
