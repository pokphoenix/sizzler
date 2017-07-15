<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = 'location';

    protected $fillable = ['name_th', 'name_en','address_th','address_en','lat','lng','status'];
    protected $dates = ['created_at', 'updated_at'];
}
