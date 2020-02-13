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

    public  function show($id){

        //$person = Person::where('id', '=', $id)->get();
        $person = Person::findOrFail($id);
        Session::put('resume_user_id', $id->user_id);
        $experiences = Experience::where('person_id', 'LIKE', "%$id->id%")->get();
        $education = Education::where('person_id', 'LIKE', "%$id->id%")->get();
        $courses = Courses::where('person_id', 'LIKE', "%$id->id%")->get();

        $skills = Skills::where('person_id', 'LIKE', "%$id->id%")->get();
        $languages = Languages::where('person_id', 'LIKE', "%$id->id%")->get();
        $projects = Project::where('person_id', 'LIKE', "%$id->id%")->get();



        $this->messege($person); //send notification


        return view('main')->with(compact('person', 'experiences', 'education', 'courses', 'skills', 'languages', 'projects', 'visits'));

    }





}
