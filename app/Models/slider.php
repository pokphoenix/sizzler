<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['name_th', 'name_en','img_th','img_en','status','position','url'];
    protected $dates = ['created_at', 'updated_at'];
    protected $hidden = ['hid_img_th','hid_img_en'] ;

}
