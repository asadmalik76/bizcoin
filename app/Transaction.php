<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded =[];
    function user(){
        return $this->belongsTo(User::class);
    }
}
