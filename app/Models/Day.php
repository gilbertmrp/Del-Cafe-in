<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $table = 'days';

    public function menus() {
        return $this->hasMany(Menu::class);
    }
}
