<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'admin_id','admin_email', 'admin_password', 'admin_name','admin_phone',
    ];
}
