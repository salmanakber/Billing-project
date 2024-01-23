<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId', 'partyId', 'itemId', 'itemQnty',
        'itemUnit', 'itemPriceParUnit', 'amount',
        'pymentType', 'description', 'discount',
        'total', 'paidAmount', 'balance',
        'return_at', 'crated_at', 'updated_at'

    ];
}
