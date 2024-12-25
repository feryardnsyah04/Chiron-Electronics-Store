<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 
        'buyer_name', 
        'email', 
        'phone', 
        'warranty_duration', 
        'order_status',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
