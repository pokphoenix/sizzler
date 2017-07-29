<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'admins';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname'
    ];
     protected $dates = ['created_at', 'updated_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    public function role(){
        return $this->belongsToMany(role::class,'role_admins')->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany(role::class, 'role_admins', 'role_id', 'admin_id')->withPivot('role_id');
    }


    public function isAdmin()
    {
        foreach ($this->role()->get() as $role)
        {
            if ($role->name == 'admin')
            {
                return true;
            }
        }

        return false;
    }

}
