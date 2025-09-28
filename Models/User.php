<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'Users_ID';
    public $timestamps = true;

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'Gender_ID');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'users_books', 'Users_ID', 'Book_ID');
    }

    public function bookHistories()
    {
        return $this->hasMany(UsersBookHistory::class, 'Users_ID');
    }

    public function favBooks()
    {
        return $this->hasMany(UsersBookFav::class, 'Users_ID');
    }

    public function paymentHistories()
    {
        return $this->hasMany(UsersPaymentHistory::class, 'Users_ID');
    }

    public function tokenHistories()
    {
        return $this->hasMany(TokenHistory::class, 'Users_ID');
    }
}
