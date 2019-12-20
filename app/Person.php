<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;

class Person extends Model
{
    use RoutesWithFakeIds;

    public $table = 'person';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function experiences() {
        return $this->hasMany(Experience::class);
    }
}
