<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected $table = 'payment_details';

    protected $guarded = ['
        id
    '];

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }
}
