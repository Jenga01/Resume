<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    //

    public function index(){


        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('login');
        }else
            return view('Admin.education');

    }

    public function create(){


    }


}
