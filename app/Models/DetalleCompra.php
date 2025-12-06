<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'product_id',
        'quantity',
        'unit_cost',
        'subtotal'
    ];

    public function compra(){
        $this->belongsTo(Compra::class, 'purchase_id');
    }

    public function product(){
        $this->belongsTo(Product::class, 'product_id');
    }
}
