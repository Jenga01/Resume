<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Not;
use App\Notification;


class notificationsController extends Controller
{
    public function notificationRead(){

        date_default_timezone_set('Europe/Vilnius');

        $date = date('Y-m-d H:i:s');

        Not::where(['read_at' => null, 'resume_user_id'=> Auth::id()])->update(['read_at' => $date]);

        return redirect()->back();


    }

    //
}
