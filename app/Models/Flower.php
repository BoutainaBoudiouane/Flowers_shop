<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flower extends Model
{
    use HasFactory;
    use SoftDeletes; 

    protected $dates = ['deleted_at']; 
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
