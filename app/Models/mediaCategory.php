<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mediaCategory extends Model
{
    protected $table = 'media_categorys';

    protected $fillable = ['name_th', 'name_en','thumbnail_th','thumbnail_en','status','position'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 
    public function media(){
        return $this->belongsTo(Media::class);
    }

}
