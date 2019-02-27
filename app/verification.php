<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verification extends Model
{
    protected $fillable = ['verify_token','not_verify_token','client_id'];

    public function client()
    {
        return $this->belongsTo('App\client');
    }
}
