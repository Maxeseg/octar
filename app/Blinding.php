<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blinding extends Model
{
    //
    protected $table='blinding';

    public function subCategory(){
        return $this->hasOne('sub_categories','sub_category','idsad');
    }

    public function keywords(){
        return $this->hasMany(Keyword::class,'trail_id','id');
    }
}
