<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'type',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
