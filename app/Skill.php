<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $hidden = [
        'businessname', 'businessaddress','city','user_id','category_id',
    ];

    public function category(){
       return $this->belongsTo(Category::class);
    }
    public function user(){
       return $this->belongsTo(User::class);
    }

    public function contacts(){
       return $this->hasMany(Contact::class);
    }
}
