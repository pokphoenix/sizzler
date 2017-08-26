<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['name', 'tel','email','message','status'];
    protected $dates = ['created_at', 'updated_at'];
}
