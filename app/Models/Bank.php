<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank_type'; 
    public $timestamps = false; 

    protected $fillable = [
        'id',
        'bank_name',
    ];
}
