<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\CustomOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public CustomOrder $customorder;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customorder)
    {
        $this->customorder = $customorder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Custom Order Alert')->view('mails.customorder-mail');
    }
}
