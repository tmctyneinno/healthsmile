<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Transaction;
use App\Mail\ZoomLinkMail;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function bookSession(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'stripeToken' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

           
            $appointmentDate = Carbon::createFromFormat('m/d/Y', $request->appointment_date)->format('Y-m-d');

            $appointmentTime = Carbon::createFromFormat('h:ia', $request->appointment_time)->format('H:i:s');
         
            $startTime = Carbon::parse(
                $request->input('appointment_date') . ' ' . $request->input('appointment_time'),
                'Europe/Dublin' 
            );
            $endTime = (clone $startTime)->addHour();
            Event::create([
                'name' => $request->input('name'),
                'startDateTime' => $startTime,
                'endDateTime' => $endTime,
            ]);

             // Create a pending transaction first
            $transaction = Transaction::create([
                'stripe_payment_id' => '', 
                'amount' => 25.00,
                'currency' => 'eur',
                'status' => 'pending'
            ]);

            $charge = Charge::create([
                "amount" => 2500, 
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Healthy Smiles Coaching Session",
            ]);

            $booking = Booking::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'appointment_date' => $startTime, 
                'appointment_time' => $endTime,
                'stripe_payment_id' => $charge->id,
                'is_paid' => true,
            ]);

            $transaction->update([
                'stripe_payment_id' => $charge->id,
                'booking_id' => $booking->id,
                'status' => 'successful'
            ]);

            // Zoom Link 
            $zoomLink = "https://zoom.us/j/1234567890?pwd=example";

            // Send Email
            Mail::to($request->email)->send(new ZoomLinkMail($booking, $zoomLink));

            return redirect()->back()->with('success', 'Booking confirmed! Check your email for the Zoom link.');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Payment failed. Please try again.'.$e], 500);
        }
    }
}
