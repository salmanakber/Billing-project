<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    use HasFactory;
    protected $fillable = [
        'userId', 'itemData', 'salePrice', 'wholeSalePrice',
        'purchasePrice', 'stockData', 'itemType',
        'crated_at', 'updated_at'
    ];
}
