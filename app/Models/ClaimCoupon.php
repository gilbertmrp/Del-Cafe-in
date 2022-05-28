<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimCoupon extends Model
{
    use HasFactory;
    protected $table = 'claim_coupons';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
