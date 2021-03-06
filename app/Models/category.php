<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categorys';

    protected $fillable = ['name_th', 'name_en','thumbnail_th','thumbnail_en','status'];
    protected $dates = ['created_at', 'updated_at'];

          

    // ,'name_img_th_1','name_img_th_2','name_img_th_3','name_img_th_4','name_img_th_5','name_img_th_6','name_img_en_1','name_img_en_2','name_img_en_3','name_img_en_4','name_img_en_5','name_img_en_6','img_th_1','img_th_2','img_th_3','img_th_4','img_th_5','img_th_6','img_en_1','img_en_2','img_en_3','img_en_4','img_en_5','img_en_6'
    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 
    public function menu(){
        return $this->hasMany(menu::class);
    }

}
