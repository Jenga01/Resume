<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'course';

    const UPDATED_AT = null;

    const CREATED_AT = null;

    public function education()
    {
        return $this->belongsToMany('App\Education', 'education', 'institution_id');
    }

    //
}
