<?php

namespace App\Events;

use App\Models\Pick;
use App\Models\User;
use Auth;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PicksSuccessfullySubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $submitted_picks;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Pick $submitted_picks)
    {
        $this->submitted_picks = $submitted_picks;
        $this->user = Auth::user();
    }
}
