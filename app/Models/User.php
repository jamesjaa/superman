<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'data_info';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'fname',
        'lname',
        'bank',
        'bank_number',
        'birthday',
        'social_name',
        'social_id',
        'telephone_number',
        'created_at',
        'update_at',
    ];

    protected $dates = [
        'birthday',
        'created_at',
        'update_at',
    ];
}
