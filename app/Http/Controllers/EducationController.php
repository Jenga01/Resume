<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Education;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class EducationController extends Controller
{
    //

    public function index(){


        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('education.create');

    }

    public function create(Request $request)
    {



        $this->validate($request, array(
            'studies_name' => 'required',
            'institution' => 'required',
            'period' => 'required',
            'degree' => 'required',
            'location' => 'required'

        ));



            $education = new Education();

            $education->studies_name = $request->studies_name;
            $education->institution = $request->institution;
            $education->period = $request->period;
            $education->degree = $request->degree;
            $education->location = $request->location;
            $education->person_id = Session::get('personID');

            $education->save();


            if ($education->save()) {

                $id = $education->id;
                Session::put('institutionID', $id);

                return redirect()->route('courses')->with('alert-success', 'data about the education has been saved');
            }




    }

    public function update(Request $request) {
        $education = Education::find($request->id);


        $education->studies_name = $request->studies_name;
        $education->institution = $request->institution;
        $education->period = $request->period;
        $education->degree = $request->degree;
        $education->location = $request->location;

        $education->save();
        return response ()->json([
            'status' => 'Education information successfully edited',
        ]);
    }

    public function delete(Request $request) {
       Education::find($request->id)->delete();
        Courses::where('institution_id', $request->id)->delete();
        return response ()->json([
            'status' => 'Education info has been successfully deleted',
        ]);
    }





}
