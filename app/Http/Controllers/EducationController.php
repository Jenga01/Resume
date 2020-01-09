<?php

namespace App\Http\Controllers;

use App\Education;
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
            return view('Admin.education');

    }

    public function create(Request $request)
    {



        $this->validate($request, array(
            'studies_name' => 'required',
            'instituition' => 'required',
            'period' => 'required',
            'location' => 'required'

        ));



            $education = new Education();

            $education->studies_name = $request->studies_name;
            $education->institution = $request->instituition;
            $education->period = $request->period;
            $education->location = $request->location;

            $education->person_id = Session::get('personID');

            $education->save();


            if ($education->save()) {

                $id = $education->id;
                Session::put('institutionID', $id);

                return redirect()->route('courses')->with('alert-success', 'data about the education has been saved');
            }




    }



}
