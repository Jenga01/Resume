<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ExperienceController extends Controller
{
    //

    public function index(){


        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('Admin.experience');

    }

    public function create(Request $request){


        $experience = new Experience();

        $experience->position = $request -> position;
        $experience->workplace = $request -> workplace;
        $experience->period = $request -> period;
        $experience->responsibilities = $request -> responsibilities;
        $experience->stack = $request -> stack;
        $experience->person_id =  Session::get('personID');

        $experience -> save();

        if($experience->save()){




            return redirect()->route('experience')->with('alert-success', 'data about the experience has been saved');
        }



    }

}
