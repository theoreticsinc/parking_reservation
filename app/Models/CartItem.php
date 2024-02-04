<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'name', 'quantity', 'price', 'options'];

    public function model()
    {
        // Assuming there is a 'product_id' column in the CartItem table
        return $this->belongsTo(Product::class, 'id');
    }

    public function product()
    {
        // Assuming there is a 'product_id' column in the CartItem table
        return $this->belongsTo(Product::class, 'id');
    }
}
