<?php

namespace pjm;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'client';
    protected $fillable = ["name","cpf","status"];
    protected $casts = ["status" => "boolean"];

    public function contacts(){
        return $this->hasMany('pjm\Contact');
    }

    public function vehicles(){
        return $this->hasMany('pjm\Vehicle');
    }

    public function serviceOrders(){
        return $this->hasMany('pjm\ServiceOrder');
    }
}
