<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentIntent extends Model
{
    use HasFactory;

    protected $table = 'payment_intents';

    protected $fillable = [
        'reference_number',
        'amount',
        'checkout_url',
    ];
}