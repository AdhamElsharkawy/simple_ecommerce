<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'stock', 'price'];



    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}