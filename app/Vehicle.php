<?php

namespace mecanica;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $table = 'vehicle';
    protected $fillable = ['client_id', 'plate', 'brand', 'year'];

    public function client()
    {
        return $this->belongsTo("mecanica\Client");
    }

    public function serviceOrder()
    {
        return $this->hasMany('mecanica\ServiceOrder');
    }
}
