<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }

    public function menuType() {
        return $this->belongsTo(MenuType::class);
    }

    public function claimCoupon() {
        return $this->belongsTo(ClaimCoupon::class);
    }

    public function statusCoupon() {
        return $this->hasOne(ClaimCoupon::class, 'id', 'user_id');
    }

}
