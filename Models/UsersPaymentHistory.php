<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPaymentHistory extends Model
{
    protected $primaryKey = 'Users_payment_history_ID';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'Users_ID');
    }

    public function status()
    {
        return $this->belongsTo(PaymentStatus::class, 'Status_ID');
    }

    public function tokenHistories()
    {
        return $this->hasMany(TokenHistory::class, 'Users_payment_history_ID');
    }
}

