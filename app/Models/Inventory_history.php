<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_history extends Model
{
    use HasFactory;

    public function Inventaris(){
        return $this->belongsTo(Inventaris::class, 'inv_id');
    }
}
