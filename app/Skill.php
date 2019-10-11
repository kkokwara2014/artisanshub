<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $hidden = [
        'businessname', 'businessaddress','city','country','user_id','category_id',
    ];

    public function category(){
        $this->belongsTo(Category::class);
    }
    public function user(){
        $this->belongsTo(User::class);
    }
}
