<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'amount',
        'method',
        'title',
        'number',
        'status',
    ];
}
