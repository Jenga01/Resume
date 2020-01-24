<?php

namespace App\Http\Controllers;

use App\Languages;
use App\Languages_filled;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

class LanguagesController extends Controller
{

    public function index(){
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('languages.create');

    }

    public function languages(){

        $language = Languages_filled::all(['id', 'name']);

        return view('languages.create')->with(compact('language'));
    }

    public function create(Request $request)
    {

        $language = new Languages();

        $language->language = $request->language;
        $language->person_id = Session::get('personID');

        $language->save();


        if ($language->save()) {

            return redirect()->route('languages')->with('alert-success', 'Language added');
        }


    }


    public function delete(Request $request) {
        Languages::find($request->id)->delete();

        return response ()->json([
            'status' => 'Language has been deleted',
        ]);
    }
    //
}
