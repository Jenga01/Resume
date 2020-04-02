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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experience()
    {
        return $this->hasMany(Experience::class, 'person_id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'person_id');
    }

    public function courses()
    {
        return $this->hasMany(Courses::class, 'person_id');
    }

    public function skills()
    {
        return $this->hasMany(Skills::class, 'person_id');
    }

    public function languages()
    {
        return $this->hasMany(Languages::class, 'person_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'person_id');
    }
}
