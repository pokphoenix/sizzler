<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = 'location';

    protected $fillable = ['name_th', 'name_en','address_th','address_en','lat','lng','status','tel','province_id'];
    protected $dates = ['created_at', 'updated_at'];


    public function province(){
        return $this->hasOne(province::class);
    }

}
