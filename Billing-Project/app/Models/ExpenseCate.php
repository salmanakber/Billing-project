<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCate extends Model {
    use HasFactory;

    protected $fillable = [
        'userId', 'expenseCateName', 'expenseCateType',
        'crated_at', 'updated_at'

    ];
}
