@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard /</a></li>
                <li class=" active"><a href="javascript:void(0)">Booking </a></li>
                
            </ol>
        </div> 
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-12 align-center mt-2">
                            @if(session('success'))
                                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <script>
                         window.setTimeout(function() {
                            var alert = document.getElementById('success-alert');
                            if (alert) {
                                alert.remove();
                            }
                        }, 3000);
                    </script>

                    <div class="card-header border-0 pb-0">
                        <div class="clearfix">
                            <h3 class="card-title">Booking List</h3>
                        </div>
                        <div class="clearfix text-center">
                            <a href="{{ route('admin.calendar.index') }}" class="btn btn-primary">View Calender</a>
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Appointment date</th>
                                        {{-- <th>Payment ID</th> --}}
                                        <th>Time</th>
                                        <th>Created date </th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @forelse ($data as $index => $booking)
                                    <tr> 
                                        <td><strong>{{  $index + 1 }}</strong></td>
                                        <td>{{ $booking->name}}</td>
                                        <td>{{ $booking->email}}</td>
                                        <td>{{ $booking->message}}</td>
                                        <td>{{ \Carbon\Carbon::parse($booking->appointment_date)->format('l, d F Y') }}</td>
                                        <td>{{ $booking->appointment_time}}</td>
                                        {{-- <td>{{ $booking->stripe_payment_id}}</td> --}}
                                        <td>{{ $booking->created_at->format('d F Y') }}</td>
                                       
                                        <td>
                                            <a href="{{ route('admin.booking.show',  encrypt($booking->id) ) }}" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.booking.destroy', encrypt($booking->id)) }}" 
                                               class="btn btn-danger btn-sm" 
                                               onclick="return confirm('Are you sure you want to delete this booking? This action cannot be undone.')">
                                               Delete
                                            </a>
                                        </td>
                                        
                                        
                                    </tr>
                                    @empty
                                        <p>No data found</p>
                                    @endforelse
                                    
                                </tbody>
                            </table>

                            {{-- <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="mb-2 me-3">
                                    Page {{ $datas->currentPage() }} of {{ $datas->lastPage() }}, showing {{ $datas->count() }} records out of {{ $datas->total() }} total, starting on record {{ $datas->firstItem() }}, ending on record {{ $datas->lastItem() }}
                                </p>  
                                <nav aria-label="Page navigation example mb-2">
                                  <ul class="pagination mb-2 mb-sm-0">
                                 
                                    <li class="page-item {{ $datas->onFirstPage() ? 'disabled' : '' }}">
                                      <a class="page-link" href="{{ $datas->previousPageUrl() }}">
                                       
                                        <i>Previous</i>
                                      </a>
                                    </li>
                                    @for ($i = 1; $i <= $datas->lastPage(); $i++)
                                      <li class="page-item {{ $datas->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $datas->url($i) }}">{{ $i }}</a>
                                      </li>
                                    @endfor
                          
                                    <li class="page-item {{ $datas->hasMorePages() ? '' : 'disabled' }}">
                                      <a class="page-link" href="{{ $datas->nextPageUrl() }}">
                                        <i>Next</i>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
            </div>
           
          
           
            
           
        </div>
    </div>
</div>
    @endsection