<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Experience extends Model
{


    public $table = 'experience';

    const UPDATED_AT = null;

    const CREATED_AT = null;

    public function person() {
        return $this->belongsTo(Person::class);
    }

}
