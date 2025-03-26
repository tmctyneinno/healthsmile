<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request; 
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index()
    {
        $events = [];
    
        // Assuming Consultant model contains appointment data
        $bookings = Booking::get(); 
        // dd($bookings);
        foreach ($bookings as $booking) {
            if (!$booking->appointment_date || !$booking->appointment_time) { 
                continue;
            }
    
            // Format the start_time and finish_time to the required format
            $start = Carbon::parse($booking->appointment_date)->toIso8601String(); 
            $end = Carbon::parse($booking->appointment_time)->toIso8601String(); 
            
            // Format event data in the desired format
            $events[] = [
                'title' => $booking->name, 
                'start' => $start,
                'end' => $end,
                'url' => route('admin.booking.show', encrypt($booking->id) ), 
            ];
        } 
        // dd($events);
        return view('admin.calendar.calendar', compact('events'));
    }
    
}
