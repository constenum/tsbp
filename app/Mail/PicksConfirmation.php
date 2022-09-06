<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PicksConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $submitted_picks;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($submitted_picks)
    {
        $this->submitted_picks = $submitted_picks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('thesecondbestpool@gmail.com', 'TSBP')
            ->subject('TSBP Picks Confirmation')
            ->markdown('emails.pick-confirmation');
    }
}
