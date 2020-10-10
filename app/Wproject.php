<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wproject extends Model
{
    protected $fillable = [
        'wproject_id','wproject_name','wproject_category','wproject_image','wproject_image1','wproject_image2','wproject_image3','wcategory','wclient','wproject_date','wproject_url',
    ];
}
