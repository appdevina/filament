<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeService extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'service_name', 'service_description', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookingTransactions()
    {
        return $this->hasMany(BookingTransaction::class);
    }
}
