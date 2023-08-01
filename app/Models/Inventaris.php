<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    public function Toko(){
        return $this->belongsTo(Toko::class, 'toko_id');
    }
    public function Inventory_history(){
        return $this->hasMany(Inventory_history::class);
    }
    public function User() {
        return $this->hasMany(User::class);
    }
}
