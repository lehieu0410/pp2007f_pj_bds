<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MailController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto Send Emails';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
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
