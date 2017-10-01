<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class releaseimages extends Model
{
    protected $table = 'releases_images';
    protected $fillable = ['image', 'release_id','status'];
    protected $dates = ['created_at', 'updated_at'];
}
