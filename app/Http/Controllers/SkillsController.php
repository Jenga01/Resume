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

        for ($i=0; $i < count($request['skills']); ++$i) {
            $skills = new Skills();

            $skills->skill = $request['skills'][$i];
            $skills->person_id = Session::get('personID');

            $skills->save();
        }


        if ($skills->save()) {

            return redirect()->route('skills')->with('alert-success', 'data about the skills has been saved');
        }


    }
    public function update(Request $request) {
        $skill = Skills::find($request->id);

        $skill->skill = $request ->skill;


        $skill->save();
        return response ()->json([
            'status' => 'Skill has been successfully edited',
        ]);
    }

    public function delete(Request $request) {
        Skills::find($request->id)->delete();

        return response ()->json([
            'status' => 'Skill has been deleted',
        ]);
    }

}
