<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class showcvController extends Controller
{

    public  function show($id){

        $person = DB::table('person')->where('id', '=', $id)->get();
        $experience = DB::table('experience')->where('person_id', '=', $id)->get();

        return view('main') ->with(compact('person', 'experience'));

    }



}
