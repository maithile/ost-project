<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'facebook_id', 'google_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function manage(){
        $this->Hasmany('App\Model\Manages');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){
        if($this->role->name == "admin"){

            return true;
        }
        return false;
    }

   public function posts(){
       return $this->hasMany('App\Model\Jobdetail');     
   }
}
