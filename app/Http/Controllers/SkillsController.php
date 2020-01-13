<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class SkillsController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('skills.create');
    }

    public function create(Request $request)
    {

        $skills = new Skills();

        $skills->skill = $request->skill;
        $skills->person_id = Session::get('personID');

        $skills->save();


        if ($skills->save()) {

            return redirect()->route('skills')->with('alert-success', 'data about the skills has been saved');
        }


    }

}
