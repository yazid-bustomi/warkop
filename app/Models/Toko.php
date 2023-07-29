<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    public function Product(){
        return $this->hasMany(Product::class);
    }

    public function Inventaris(){
        return $this->hasMany(Inventaris::class);
    }
}
