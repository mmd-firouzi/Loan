<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID',
        'fundID',
        'loan_amount',
        'payment_amount',
        'interest',
        'installments',
        'installments_count',
        'start_date',
        'info',
    ];
    public $timestamps = false;
}
