<?php

namespace App\Models\user;

use App\Models\Transaction;
use App\Models\User;
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


    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
