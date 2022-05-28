<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $guarded = [];

    public function menuType() {
        return $this->belongsTo(MenuType::class);
    }

    public function day() {
        return $this->belongsTo(Day::class);
    }
}


