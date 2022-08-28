<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;

class WeeklyPicksReminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $url = 'http://64.225.60.114/login';

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
    public function build(): static
    {
        return $this
            ->from('thesecondbestpool@gmail.com', 'TSBP')
            ->subject('TSBP Weekly Pick Reminder')
            ->markdown('emails.weekly-picks-reminder');
    }
}
