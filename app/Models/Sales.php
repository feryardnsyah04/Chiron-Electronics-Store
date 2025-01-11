<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'serial_number',
        'quantity',
        'buyer_name',
        'email',
        'phone',
        'purchase_location',
        'order_status',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
