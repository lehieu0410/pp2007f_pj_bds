<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    //
    public function sendemail() 
    {     
        $yesterday = Carbon::now('Asia/Ho_Chi_Minh')->subDay()->toDateString();

        $total_dby = DB::table('users')->whereDate('updated_at', '<=', Carbon::now('Asia/Ho_Chi_Minh')
        ->subDays(2)->toDateString())->get()->sum('account');     
           
        $total_yd = DB::table('users')->whereDate('updated_at', '<=', Carbon::now('Asia/Ho_Chi_Minh')
        ->subDay()->toDateString())->get()->sum('account');

        // $change = $total_yd - $total_dby;
        $details = [
            'day' => $yesterday,
            'total_dby' => $total_dby,
            'total_yd' =>  $total_yd,
            'change'=> $total_yd - $total_dby

        ];
        $to = [ 'sng198x@gmail.com' , 'garunemo3@gmail.com' ];
        \Mail::to($to)->send(new \App\Mail\MyTestMail($details));
    
        echo "Email is Sent.";
    }
}
