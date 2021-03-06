<?php

namespace mecanica;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['client_id','name','email','phone'];

    public function client(){
        return $this->belongsTo("mecanica\Client");
    }
}
