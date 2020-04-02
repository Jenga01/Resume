<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Education;
use App\Experience;
use App\Languages;
use Notification;
use App\Notifications\VisitsNotification;
use App\Person;
use App\Project;
use App\Skills;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class showcvController extends Controller
{

    public function show($id)
    {
        $person = Person::findOrFail($id);
        Session::put('resume_user_id', $id->user_id);

        $experiences = Person::find($id->id)->experience()->get();
        $education = Person::find($id->id)->education()->get();
        $courses = Person::find($id->id)->courses()->get();
        $skills = Person::find($id->id)->skills()->get();
        $languages = Person::find($id->id)->languages()->get();
        $projects = Person::find($id->id)->projects()->get();


        $this->messege($person); //send notification


        return view('main')->with(compact('person', 'experiences', 'education', 'courses', 'skills', 'languages',
            'projects', 'visits'));
    }

    public function messege($person)
    {
        if (Auth::check()) {
            $details = [
                'greeting' => 'Hi, ' . $person[0]->name,
                'body' => Auth::user()->name . ' checked your resume',
                'thanks' => 'Thank you for using Resumetec!',
                'actionText' => 'View My Site',
                'actionURL' => url('/'),
                'messege' => 'Visited you',

            ];


            Notification::send($person, new VisitsNotification($details));
        } else {
            $details = [
                'greeting' => 'Hi, ' . $person[0]->name,
                'body' => 'Someone checked your resume',
                'thanks' => 'Thank you for using Resumetec!',
                'actionText' => 'View My Site',
                'actionURL' => url('/'),
                'messege' => 'had a visitor',

            ];


            Notification::send($person, new VisitsNotification($details));
        }
    }

}
