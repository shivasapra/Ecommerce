<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employees'];

    public function user(){
        $this->belongsTo('App\Employee');
    }
}
