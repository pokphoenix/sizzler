<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['provinces_name_th', 'provinces_name_en','geo_id','province_code'];

    public function location(){
        return $this->hasOne(location::class);
    }

}
