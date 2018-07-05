<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class NoteEmail extends Mailable
{
    use Queueable, SerializesModels;
     

    public $noteInfo;
 
  
    public function __construct($noteInfo)
    {
        $this->noteInfo = $noteInfo;
    }
 

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->view('mail.note')
                    ->text('mail.note_plain');
      
    }
}