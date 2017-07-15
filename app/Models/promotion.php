<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table = 'promotion';

    protected $fillable = ['name_th', 'name_en','thumbnail_th','thumbnail_en','status','category_id','position'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 

}
