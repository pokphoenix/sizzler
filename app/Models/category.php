<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categorys';

    protected $fillable = ['name_th', 'name_en','status','thumbnail_th','thumbnail_en','position'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 
    public function getNameENAttribute($value){
    	return ucfirst($value);
    }
    public function setNameENAttribute($value){
    	return strtolower($value);
    }

}
