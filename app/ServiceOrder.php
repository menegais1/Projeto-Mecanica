<?php

namespace pjm;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $table = 'service_order';
    protected $fillable = ['client_id','vehicle_id','user_id','start_date','end_date','service_description','amount','notes'];


    public function client(){
        return $this->belongsTo("pjm\Client");
    }


    public function user(){
        return $this->belongsTo("pjm\User");
    }


    public function vehicle(){
        return $this->belongsTo("pjm\Vehicle");
    }
}
