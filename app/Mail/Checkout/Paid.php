<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Paid extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    public function build()
    {
        return $this->subject('Your Transaction Has Been Confirmed')
        ->markdown('emails.checkout.paid',[
            'checkout' => $this->checkout
        ]);
    }
}