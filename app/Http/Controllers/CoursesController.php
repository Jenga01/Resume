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

            return back()->with('alert-success', 'data about the education courses has been saved');
        }


    }


    public function update(Request $request) {
        $course = Courses::find($request->id);

        $course->course_name = $request ->course_name;


        $course->save();
        return response ()->json([
            'status' => 'Course name successfully edited',
        ]);
    }


    public function delete(Request $request) {
        Courses::find($request->id)->delete();

        return response ()->json([
            'status' => 'Course has been successfully deleted',
        ]);
    }


}
