<?php

namespace App\Models\admin;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'price',
        'status',
        'picture',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
