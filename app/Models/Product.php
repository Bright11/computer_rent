<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Rented_item()
    {
        # code...
        return $this->hasMany(Rented_item::class);
    }
}
