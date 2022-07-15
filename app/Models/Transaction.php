<?php

namespace App\Models;

use App\Models\user\Withdraw;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'status',
        'amount',
        'note',
        'sum',
        'reference',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function withdraws($query)
    {
        return $query->hasMany(Withdraw::class);
    }
}
