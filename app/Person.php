<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;
use Illuminate\Notifications\Notifiable;

class Person extends Model
{
    use RoutesWithFakeIds;
    use Notifiable;

    public $table = 'person';


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function experiences() {
        return $this->hasMany(Experience::class);
    }
}
