<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'name',
        'variants',
        'category',
        'supplier',
        'price',
        'stock',
    ];
    
    public function increaseStock($quantity)
    {
        $this->stock += $quantity;
        $this->save();
    }

    public function decreaseStock($quantity)
    {
        if ($this->stock < $quantity) {
            throw new \Exception('Stok produk tidak mencukupi.');
        }
        $this->stock -= $quantity;
        $this->save();
    }
}
