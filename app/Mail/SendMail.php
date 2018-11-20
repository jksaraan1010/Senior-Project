<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Note;

class SendMail extends Mailable
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

        $storedNotes = Note::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return $this->view('EmailNotes')->with('storedNotes', $storedNotes)->subject('Your Notes');
   
    }
}
