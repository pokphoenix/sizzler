<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menuDetail extends Model
{
    protected $table = 'menu_detail';

    protected $fillable = ['name_th', 'name_en','img_th','img_en','category_id','menu_id','price_th', 'price_en','title_th', 'title_en'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_img_th','hid_img_en'] ;
 
  

}
