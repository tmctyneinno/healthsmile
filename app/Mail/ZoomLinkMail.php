<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ZoomLinkMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $zoomLink;

    public function __construct($booking, $zoomLink)
    {
        $this->booking = $booking;
        $this->zoomLink = $zoomLink;
    }

    public function build()
    {
        return $this->subject('Your Zoom Session Details')
                    ->view('emails.zoom_link')
                    ->with([
                        'name' => $this->booking->name,
                        'appointmentDate' => $this->booking->appointment_date,
                        'appointmentTime' => $this->booking->appointment_time,
                        'zoomLink' => $this->zoomLink,
                    ]);
    }
}
