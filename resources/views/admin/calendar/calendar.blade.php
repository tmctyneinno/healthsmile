@extends('layouts.admin')

<style>
    #calender a{
        color: #000000;
        text-decoration: none;
    }
    .mr-auto{
        margin-right: auto;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
 
@section('content')


     <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto d-lg-block d-block">
                    <h2 class="text-black font-w600">Calendar</h2>
                    <p class="mb-0">Welcome to {{ $contactUs->company_name ?? ''}} backend</p>
                </div>
                <a href="{{route('admin.booking.index')}}" class="btn btn-primary rounded light">View Booking</a>
            </div> 
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-10 align-center">
                    <div class="card">
                        <div class="card-body">
                           <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection

<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script>

    $(document).ready(function() {
        $('#solution').select2({
            placeholder: "Select a solution",
            allowClear: true
        });
    }); 
   
    document.addEventListener('DOMContentLoaded', function() {
    var events = {!! json_encode($events) !!};
    const calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        initialDate: new Date(),
        selectable: true,
        headerToolbar: {
          left: 'prev,next',
          center: 'title',
          right: 'timeGridWeek,timeGridDay'
        },
        events: events,
        timeZone: 'Europe/London',  // Specify the timezone to match the event times
        dateClick: function(info) {
            document.getElementById('calendar_date').value = info.dateStr; 
            console.log('Clicked on: ' + info.dateStr);
        }
    });
    calendar.render();
});


</script>