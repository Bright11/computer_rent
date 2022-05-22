<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_item extends Model
{
    use HasFactory;
    public function Product()
    {
        # code...
        return $this->belongsTo(Product::class);
    }

    public function User()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
