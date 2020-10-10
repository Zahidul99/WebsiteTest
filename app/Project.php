<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_id','project_name','project_category','project_image','project_image1','project_image2','project_image3','category','client','project_date','project_url',
    ];
}
