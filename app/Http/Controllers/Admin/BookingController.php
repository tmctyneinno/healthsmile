<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use App\Models\Booking;
 
class BookingController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data['data'] = Booking::latest()->get();
        return view('admin.bookings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookng = Booking::where('id', decrypt($id))->first();

        return view('admin.transaction.show', compact('bookng'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AdvisoryBoardMember::findOrFail(decrypt($id));
        return view('admin.advocacyPolicy.advisoryBoardMember.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
    }
       

    

    public function destroy($id)
    {
        try {
            $bookingId = decrypt($id);
            $booking = Booking::findOrFail($bookingId);

            // Remove the event from Google Calendar
            if ($booking->google_event_id) {
                $this->deleteGoogleCalendarEvent($booking->google_event_id);
            }

            // Delete booking from database
            $booking->delete();

            return redirect()->back()->with('success', 'Booking deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete booking: ' . $e->getMessage());
        }
    }

    private function deleteGoogleCalendarEvent($eventId)
    {
        try {
            $event = Event::find($eventId);

            if ($event) {
                $event->delete();
            }
        } catch (\Exception $e) {
            \Log::error('Failed to delete Google Calendar event: ' . $e->getMessage());
        }
    }



}
