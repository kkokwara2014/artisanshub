<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['user_id','skill_id','isdone'];

    public function user(){
       return $this->belongsTo(User::class);
    }
    public function skill(){
       return $this->belongsTo(Skill::class);
    }
}
