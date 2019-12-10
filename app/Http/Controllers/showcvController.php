<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class showcvController extends Controller
{

    public  function show(){

        $jevbogd = DB::table('person')->get();
        $experience = DB::table('experience')->get();

        return view('main') ->with(compact('jevbogd', 'experience'));

    }



}
