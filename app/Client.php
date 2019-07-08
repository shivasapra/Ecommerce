<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   

    protected $fillable = ['clients'];

    public function user(){
        $this->belongsTo('App\User');
    }
}
