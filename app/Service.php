<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_id','client_no','project_no','support_time','hard-worker',
    ];
}

