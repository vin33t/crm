<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','email','password','phone','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
