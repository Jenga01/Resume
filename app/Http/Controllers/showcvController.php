<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Education;
use App\Experience;
use App\Languages;
use App\Person;
use App\Project;
use App\Skills;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class showcvController extends Controller
{

    public  function show($id){

        //$person = Person::where('id', '=', $id)->get();
        $person = Person::findOrFail($id);
        $experience = Experience::where('person_id', 'LIKE', "%$id->id%")->get();
        $education = Education::where('person_id', 'LIKE', "%$id->id%")->get();
        $courses = Courses::where('person_id', 'LIKE', "%$id->id%")->get();
        $skills = Skills::where('person_id', 'LIKE', "%$id->id%")->get();
        $languages = Languages::where('person_id', 'LIKE', "%$id->id%")->get();
        $projects = Project::where('person_id', 'LIKE', "%$id->id%")->get();



        return view('main')->with(compact('person', 'experience', 'education', 'courses', 'skills', 'languages', 'projects'));

    }



}
