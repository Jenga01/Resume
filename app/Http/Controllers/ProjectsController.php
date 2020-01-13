<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class ProjectsController extends Controller
{

    public function index(){
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('projects.create');

    }

    public function create(Request $request)
    {

        $this->validate($request, array(
            'name' => 'required',
            'description' => 'required',
            'url' => 'required'

        ));

        $project = new Project();

        $project->name = $request->name;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->person_id = Session::get('personID');

        $project->save();


        if ($project->save()) {

            return redirect()->route('projects')->with('alert-success', 'Project added');
        }


    }
    //
}
