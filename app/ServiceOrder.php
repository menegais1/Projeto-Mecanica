<?php

namespace mecanica;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $table = 'service_order';
    protected $fillable = ['client_id','vehicle_id','user_id','start_date','end_date','service_description','amount','notes'];


    public function client(){
        return $this->belongsTo("mecanica\Client");
    }


    public function user(){
        return $this->belongsTo("mecanica\User");
    }


    public function vehicle(){
        return $this->belongsTo("mecanica\Vehicle");
    }
}
