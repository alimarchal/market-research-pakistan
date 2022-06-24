<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueryToInfo extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $query;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $query)
    {
        $this->user = $user;
        $this->query = $query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $query = $this->query;
        return $this->subject('New query by user')->view('emails.queryToInfo', compact('user', 'query'));
    }
}
