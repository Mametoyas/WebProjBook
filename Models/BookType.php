<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $primaryKey = 'Book_type_ID';
    public $timestamps = true;

    public function books()
    {
        return $this->hasMany(Book::class, 'Book_type_ID');
    }
}

