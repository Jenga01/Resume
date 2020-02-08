<?php

namespace App\Http\Controllers;

use App\Notifications\VisitsNotification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Notification;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function messege($person){

        if(Auth::check()){
            $details = [
                'greeting' =>'Hi, '. $person[0]->name,
                'body' => Auth::user()->name .' checked your resume',
                'thanks' => 'Thank you for using Resumetec!',
                'actionText' => 'View My Site',
                'actionURL' => url('/'),
                'messege' => 'you have a new visitor'
            ];
            Notification::send($person, new VisitsNotification($details));
        }else{
            $details = [
                'greeting' =>'Hi, '. $person[0]->name,
                'body' => 'Someone checked your resume',
                'thanks' => 'Thank you for using Resumetec!',
                'actionText' => 'View My Site',
                'actionURL' => url('/'),
                'messege' => 'you have a new visitor'
            ];
            Notification::send($person, new VisitsNotification($details));
        }

    }
}
