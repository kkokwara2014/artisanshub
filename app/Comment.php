<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $hidden = [
        'comment', 'user_id','commenttime','commentdate',
    ];
    
    public function user(){
       return $this->belongsTo(User::class);
    }
}
