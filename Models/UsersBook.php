<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersBook extends Model
{
    protected $primaryKey = 'Users_book_ID';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'Users_ID');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'Book_ID');
    }
}

