<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
    protected $primaryKey = 'Status_ID';
    public $timestamps = true;

    public function paymentHistories()
    {
        return $this->hasMany(UsersPaymentHistory::class, 'Status_ID');
    }
}

