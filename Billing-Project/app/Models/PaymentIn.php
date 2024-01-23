<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentIn extends Model {
    use HasFactory;
    protected $fillable = [
        'userId', 'partyId', 'paymentType', 'description',
        'receivedAmount', 'paymentInCreatedAt', 'crated_at',
        'updated_at'
    ];
}
