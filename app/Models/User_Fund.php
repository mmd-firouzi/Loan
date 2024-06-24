<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Fund extends Model
{

    use HasFactory;

    protected $fillable = [
    'userID',
    'fundID',
    'join_date',
    'Balance',
];
    public $timestamps = false;

}
