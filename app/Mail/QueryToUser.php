<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QueryToUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $query;
    protected $user;

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
        return $this
        // ->greeting('Hi'. ' ' . $user->first_name . ' ' . $user->last_name)
        ->subject('Entered a query')
        ->view('emails.queryToUser', compact('query', 'user'));
    }
}
