<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'Book_ID';
    public $timestamps = true;

    public function type()
    {
        return $this->belongsTo(BookType::class, 'Book_type_ID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_books', 'Book_ID', 'Users_ID');
    }

    public function bookHistories()
    {
        return $this->hasMany(UsersBookHistory::class, 'Book_ID');
    }

    public function favUsers()
    {
        return $this->hasMany(UsersBookFav::class, 'Book_ID');
    }
}

