<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenHistory extends Model
{
    protected $primaryKey = 'Token_history_ID';
    public $timestamps = true;

    public function paymentHistory()
    {
        return $this->belongsTo(UsersPaymentHistory::class, 'Users_payment_history_ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Users_ID');
    }
}
