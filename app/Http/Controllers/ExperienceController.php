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
            return view('experience.create');

    }

    public function create(Request $request){

        $this->validate($request, array(
            'position' => 'required',
            'workplace' => 'required',
            'period' => 'required',
            'responsibilities' => 'required',

        ));

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

   /* public function update(Request $request, $id)
    {
      //  $jobid = Experience::findOrFail($id);

        $experience = Experience::findOrFail($id);
        $experience->position = $request -> position;
        $experience->workplace = $request -> workplace;
        $experience->period = $request -> period;
        $experience->responsibilities = $request -> responsibilities;
        $experience->stack = $request -> stack;




        if($experience->save())
        {

            return redirect()->back()->with('alert-success', 'Work experience info updated!');
        }

    }*/

}
