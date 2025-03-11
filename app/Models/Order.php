<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'flower_id',
        'quantity',
        'total_price',
        'status',
        'type',
    ];

    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }
}
