<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'nationID',
        'phone_number',
        'email',
        'address',
    ];
    public $timestamps = false;

    public function funds()
    {
        return $this->belongsToMany(Fund::class, 'user_fund', 'userID', 'fundID')
            ->withPivot('join_date', 'Balance');
    }
}
