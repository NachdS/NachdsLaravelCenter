<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    public function __construct($details)
    {
        $this->$details;
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function build()
    {
        return $this->subject('Contact Message')->view('emails.ContactMail');
    }
}