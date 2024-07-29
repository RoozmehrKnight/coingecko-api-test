<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'coingecko_id',
        'name',
        'symbol',
        'current_price',
        'price_change_24h',
        'price_change_percentage_24h',
    ];

}
