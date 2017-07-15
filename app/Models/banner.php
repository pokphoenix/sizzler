<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banners';
    protected $fillable = ['name_img_th_1', 'name_img_en_1','img_th_1','img_en_1','name_img_th_2', 'name_img_en_2','img_th_2','img_en_2','status','url'];
    protected $dates = ['created_at', 'updated_at'];
    protected $hidden = ['hid_img_th_1','hid_img_en_1','hid_img_th_2','hid_img_en_2'] ;

}
