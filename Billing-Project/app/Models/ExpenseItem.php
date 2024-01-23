<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model {
    use HasFactory;
    protected $fillable = [
        'userId', 'expenseItemName', 'expenseItemPrice',
        'crated_at', 'updated_at'

    ];
}
