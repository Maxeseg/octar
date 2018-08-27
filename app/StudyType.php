<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyType extends Model
{
    //
    protected $table = 'study_types';

    public function trails(){
        return $this->belongsToMany(Trails::class);
    }
}
