<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    public function Inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
    
    public function inventoryHistory()
    {
        return $this->hasMany(Inventory_history::class);
    }
}
