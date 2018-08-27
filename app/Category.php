<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function sub_categories(){
        return $this->hasMany(SubCategory::class,'cat_id','id');
    }
}
