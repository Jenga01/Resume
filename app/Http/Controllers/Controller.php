<?php

namespace App\Http\Controllers;

use App\Notifications\VisitsNotification;
use App\Person;
use FontLib\Table\Type\name;
use App\Not;
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
                'messege' => 'you had a new visitor',
                'user_id' =>  $person[0]->user_id

            ];
            Notification::send($person, new VisitsNotification($details));

        }else{

            $details = [
                'greeting' =>'Hi, '. $person[0]->name,
                'body' => 'Someone checked your resume',
                'thanks' => 'Thank you for using Resumetec!',
                'actionText' => 'View My Site',
                'actionURL' => url('/'),
                'messege' => 'you had a new visitor',
                'user_id' => $person[0]->user_id
            ];

                Notification::send($person, new VisitsNotification($details));

                //send($person, new VisitsNotification($details));


        }



    }
}
