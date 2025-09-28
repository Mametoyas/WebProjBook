<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $primaryKey = 'Gender_ID';
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany(User::class, 'Gender_ID');
    }
}

