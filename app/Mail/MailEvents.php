<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Events;
class MailEvents extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $id = Auth::id();
        //$Events = Events::where('user_id', Auth::user()->id)->orderBy('start_date', 'asc')->get();

        $EventDate = DB:: select('SELECT DATE(start_date) as startDate, DATE(end_date) as endDate FROM events WHERE user_id= '.$id.'');
        $EventTime = DB::select('SELECT  cast(start_date as time(0)) as startTime, cast(end_date as time(0)) as endTime FROM events WHERE user_id= '.$id.'');
       $Events = DB::select('SELECT event_name FROM events WHERE user_id= '.$id.'');
        
        return $this->view('EmailEvents')->with('Events', $Events)->with('EventTime', $EventTime)->with('EventDate', $EventDate)->subject('Test Email');
    }
}