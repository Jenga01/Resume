<?php

namespace App\Http\Controllers;

use App\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class CoursesController extends Controller
{
    //


    public function index(){


        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('courses.create');

    }

    public function create(Request $request){


        for ($i=0; $i < count($request['courses']); ++$i) {

            $courses = new Courses();
            $courses->course_name = $request['courses'][$i];
            $courses->institution_id = Session::get('institutionID');
            $courses->person_id = Session::get('personID');

            $courses->save();

        }

        if ($courses->save()) {

            return redirect()->route('courses')->with('alert-success', 'data about the education courses has been saved');
        }


    }
}
