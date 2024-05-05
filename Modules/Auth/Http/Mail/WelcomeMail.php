<?php

namespace Modules\Auth\Http\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $get_user_email;
    public $validToken;

    /**
     * Create a new message instance.
     */
    public function __construct($get_user_email, $validToken)
    {
        $this->get_user_email = $get_user_email;
        $this->validToken = $validToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail')->with([
            'user_email' => $this->get_user_email,
            'validToken' => $this->validToken,
        ]);
    }
}