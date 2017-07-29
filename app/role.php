<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $dates = ['created_at', 'updated_at'];
   
    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'role_admins', 'role_id', 'admin_id')->withPivot('name');
    }
}
