<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateAccount extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function getTotalAmount()
    {
        return $this->refund_amount + $this->bonus_amount;
    }
}
