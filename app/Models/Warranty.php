<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 
        'serial_number', 
        'buyer_name', 
        'email', 
        'phone', 
        'purchase_time',
        'warranty_duration',
        'expiration_time',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
