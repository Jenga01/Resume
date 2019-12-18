<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Image;
use Session;


class createController extends Controller
{
    //

    public function upload()
    {
        return view('BE.person');
    }

    public function personPost(Request $request)

    {

        $this->validate($request, array(
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        $person = new Person();
        $person-> name    = $request->name;
        $person->email        = $request->email;
        $person->phone        = $request->phone;
        $person->birthday      = $request->birthday;
        $person->location      = $request->location;
        $person->linkedin     = $request->linkedin;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/uploads/' . $filename);
            Image::make($image->getRealPath())->resize(300, 300)->save($path);
            $person->image = '/uploads/'.$filename;
            $person->save();
        };

        if($person->save()){
            $id = $person->id;
            Session::put('personID', $id);


            return redirect()->route('person.id')->with('alert-success', 'data stored');
        }


    }

    /*public function getPerson(){


        //$person = Per::where('user_id','=',auth()->user()->id)->orderBy('id', 'DESC')->first();
        return view('BE.experience');

    }*/

    public function experience(Request $request){


        $experience = new Experience();

        $experience->position = $request -> position;
        $experience->workplace = $request -> workplace;
        $experience->period = $request -> period;
        $experience->responsibilities = $request -> responsibilities;
        $experience->stack = $request -> stack;
        $experience->person_id =  Session::get('personID');

        $experience -> save();

        return view('BE.experience')->with('alert-success', 'data stored');

    }



}
