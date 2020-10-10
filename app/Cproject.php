<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cproject extends Model
{
    protected $fillable = [
        'cproject_id','cproject_name','cproject_category','cproject_image','cproject_image1','cproject_image2','cproject_image3','ccategory','cclient','cproject_date','cproject_url',
    ];
}
