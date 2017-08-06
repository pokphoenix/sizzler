<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menus';

    protected $fillable = ['title_th', 'title_en','sub_title_th', 'sub_title_en','price','img_name_th', 'img_name_en',  'img_th','img_en','category_id','status' ,'thumbnail_th','thumbnail_en'  ];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 
  	public function images(){
        return $this->hasMany(menuDetail::class);
    }

}
