<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    protected $table = 'option_sms';
    public $timestamps = false;

    protected $fillable = [
        'opsms_id',
        'ag_id',
        'sms_provider',
        'sms_username',
        'sms_password',
        'sms_endpoint',
        'sms_sender_name'
    ];

    protected $dates = [
        'created_at',
        'update_at',
    ];
}
