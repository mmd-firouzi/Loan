<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fund extends Model
{
    use HasFactory;


    protected $fillable = [
        'fund_name',
        'admin_name',
        'create_date',
        'total-amount',
        'entry',
        'monthly_pay',
        'bank_account',
        'max_member',
        'info',
    ];



    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_fund', 'fundID', 'userID');
            #->withPivot('join_date', 'Balance');

    }
}
