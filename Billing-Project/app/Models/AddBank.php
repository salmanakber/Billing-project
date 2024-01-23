<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId', 'bankName', 'openingBalance', 'asOfTime',
        'crated_at', 'updated_at'
    ];
}
