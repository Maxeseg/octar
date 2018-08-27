<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trails extends Model
{
    //
    protected $table = 'trials';

    public function arms(){
        return $this->hasMany(Arm::class,'trials_id','id');
    }

    public function figures(){
        return $this->hasMany(RelevantFigure::class,'trials_id','id');
    }

    public function keywords(){
        return $this->hasMany(Keyword::class,'trials_id','id');
    }

    public function study_types(){
        return $this->belongsToMany(StudyType::class);
    }

    public function category(){
        return $this->hasOne(Category::class,'category','id');
    }

    public function sub_category(){
        return $this->hasOne(SubCategory::class,'sub_category','id');
    }

    public function blind(){
        return $this->hasOne(Blinding::class,'id','blinding');
    }

    public function end_point(){
        return $this->hasOne(EndPoint::class,'id','endpoint_type');
    }


}


