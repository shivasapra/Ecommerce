<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['vendors'];

    public function user(){
        $this->belongsTo('App\Vendor');
    }
}
