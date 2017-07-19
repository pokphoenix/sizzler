<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $table = 'medias';

    protected $fillable = ['url','name_th', 'name_en','thumbnail_th','thumbnail_en','status','media_category_id','position','short_desc_th','short_desc_en'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;
 
    public function mediaCategory(){
        return $this->belongsTo(mediaCategory::class);
    }

}
