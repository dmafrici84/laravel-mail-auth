<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $television;
    public $action;

    public function __construct($user, $television, $action)
    {
      $this -> user = $user;
      $this -> television = $television;
      $this -> action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from('user@boolean.it')
                     -> view('television-mail');
    }
}
