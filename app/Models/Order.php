<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $table = 'orders';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
