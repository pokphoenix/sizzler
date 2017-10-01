<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class release extends Model
{
    protected $table = 'releases';

    protected $fillable = ['url','title_th', 'title_en','thumbnail_th','thumbnail_en','short_description_th','short_description_en','status','text_th','text_en','position'];
    protected $dates = ['created_at', 'updated_at'];

    protected $hidden = ['hid_thumbnail_th','hid_thumbnail_en'] ;

    public function releaseimages(){
        return $this->hasMany(releaseimages::class);
    }
}
