<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $table = 'education';

    const UPDATED_AT = null;

    const CREATED_AT = null;


    public function courses()
    {
        return $this->belongsToMany('App\Courses', 'institution_id');
    }
    //
}
