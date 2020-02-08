<?php

namespace App\Http\Controllers;

use App\Person;
use App\User;

use Notification;
use App\Notifications\VisitsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $person = Person::where('user_id', '=', Auth::id())->get();


        return view('home')->with(compact('person'));


    }



}
