<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstimationQoute extends Model {
    use HasFactory;
    protected $fillable = [
        'userId', 'partyId', 'itemId', 'itemQnty',
        'itemUnit', 'itemUnitPrice', 'amount',
        'discount', 'crated_at', 'updated_at'
    ];
}
