<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname','firstname','phone', 'email', 'password','gender','isactive','userimage',
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

    public function skills(){
       return $this->hasMany(Skill::class);
    }
    public function comments(){
       return $this->hasMany(Comment::class);
    }
    public function contacts(){
       return $this->hasMany(Contact::class);
    }
    public function role(){
       return $this->belongsTo(Role::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }
}
