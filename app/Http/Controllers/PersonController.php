<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Image;
use Session;

use Vinkla\Hashids\Facades\Hashids;


class PersonController extends Controller
{
    //

    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('Admin.person');
    }

    public function create(Request $request)

    {

        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
            'location' => 'required',
            'linkedin' => 'required',
            'image' => 'required','image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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


            return redirect()->route('person.id')->with('alert-success', 'Person data has been saved');
        }


    }




}
