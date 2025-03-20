<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Booking;

class BookingController extends Controller
{
    public function bookSession(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'appointment_time' => 'required|date',
            'stripeToken' => 'required'
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            "amount" => 2500, // 25 Euros in cents
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Healthy Smiles Coaching Session",
        ]);

        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'appointment_time' => $request->appointment_time,
            'stripe_payment_id' => $charge->id,
            'is_paid' => true,
        ]);

        // Send Zoom link email (implement email logic here)

        return redirect()->back()->with('success', 'Booking confirmed! Check your email for the Zoom link.');
    }
}
