<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table = 'results';

    public function end_point(){
        return $this->hasOne(EndPoint::class,'id','endpoint_type');
    }
}
