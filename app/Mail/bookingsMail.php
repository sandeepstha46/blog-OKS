<?php

namespace App\Mail;

use App\Http\Controllers\BookingController;
use App\Models\Bookings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bookingsMail extends Mailable
{
    use Queueable, SerializesModels;

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
    public function build(Bookings $bookings)
    {
        $data = Bookings::where('status', '>', 0)->first();
        return $this->view('emails.booking-email',compact('data'));
    }
}