<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentOut extends Model {
    use HasFactory;
    protected $fillable = [
        'userId', 'partyId', 'paymentType', 'description',
        'paid', 'paymentOutCreatedAt', 'crated_at',
        'updated_at'
    ];
}
