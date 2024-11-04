<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['home_service_id', 'customer_name', 'customer_phone', 'booking_date', 'status'];

    public function homeService()
    {
        return $this->belongsTo(HomeService::class);
    }
}
