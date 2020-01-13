<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Education;
use App\Experience;
use App\Person;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class showcvController extends Controller
{

    public  function show($id){

        $person = Person::where('id', '=', $id)->get();
        $experience = Experience::where('person_id', '=', $id)->get();
        $education = Education::where('person_id', '=', $id)->get();
        $courses = Courses::where('person_id', '=', $id)->get();



        return view('main')->with(compact('person', 'experience', 'education', 'courses'));

    }



}
