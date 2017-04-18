<?php

namespace pjm;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $table = 'vehicle';
    protected $fillable = ['client_id', 'plate', 'brand', 'year'];

    public function client()
    {
        return $this->belongsTo("pjm\Client");
    }

    public function serviceOrder()
    {
        return $this->hasMany('pjm\ServiceOrder');
    }
}
