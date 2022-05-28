<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use SoftDeletes;
    protected $table = 'coupons';

    public function menuType() {
        return $this->hasOne(MenuType::class, 'id', 'menu_type_id');
    }

    public function level() {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function claimCoupons() {
        return $this->hasMany(ClaimCoupon::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}