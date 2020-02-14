<?php

namespace App\Http\Controllers;

use App\Not;
use App\Person;

use App\Notification;


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

        $notifications = Not::join('person', 'person.id', '=', 'notifiable_id')
            ->join('users', 'users.id', '=', 'notifications.user_id')
            ->select('users.*', 'notifications.user_id', 'person.title', 'notifications.*')
            ->orderBy('notifications.updated_at', 'desc')
            ->where(['resume_user_id' => Auth::id(), 'read_at'=> null])
            ->get();


        return view('home')->with(compact('person', 'notifications'));


    }


}
