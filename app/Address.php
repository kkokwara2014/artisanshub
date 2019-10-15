<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['user_id','address','town','city'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
