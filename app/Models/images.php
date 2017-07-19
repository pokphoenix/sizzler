<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'images';
    protected $fillable = ['image', 'healthtip_id','status'];
    protected $dates = ['created_at', 'updated_at'];
}
