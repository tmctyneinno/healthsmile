<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email',  
        'message', 
        'appointment_date',
        'appointment_time', 
        'stripe_payment_id', '
        is_paid'];
}
