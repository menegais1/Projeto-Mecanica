<?php

namespace mecanica;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ["name","cpf","status"];
    protected $casts = ["status" => "boolean"];

    public function contacts(){
        return $this->hasMany('mecanica\Contact');
    }

    public function vehicles(){
        return $this->hasMany('mecanica\Vehicle');
    }

    public function serviceOrders(){
        return $this->hasMany('mecanica\ServiceOrder');
    }
}
