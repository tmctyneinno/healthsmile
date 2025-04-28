@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard / </a></li>
                <li class=""><a href="javascript:void(0)">Service</a></li>
                
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
                            <h3 class="card-title">Service List</h3>
                        </div>
                        <div class="clearfix text-center">
                            <a href="{{route('admin.service.create')}}" class="btn btn-primary">Add Service</a>
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>DATE   </th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $index => $service)
                                        <tr>
                                            <td><strong>{{  $index + 1 }}</strong></td>
                                            <td>{{ $service->title }}</td>
                                            <td>{!! Str::limit($service->content, 30) !!}</td>
                                            <td>
                                                <img style=" width: 100px; height: 100px; object-fit: cover; " src="{{ asset($service->image) }}" class="img-thumbnail" height="30" alt="{{ $service->title }}"  style="max-width: 100px;"/>
                                            </td>
                                            <td>{{ $service->created_at->format('d F Y') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-primary " style="margin-right: 5px;" href="{{ route('admin.service.edit',  encrypt($service->id) ) }}">Edit</a>
                                                    <a class="btn btn-danger" href="{{ route('admin.service.destroy', encrypt($service->id) )  }}" onclick="return confirm('Are you sure you want to delete this Service?');">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No Service items found.</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>

                             <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="mb-2 me-3">
                                    Page {{ $services->currentPage() }} of {{ $services->lastPage() }}, showing {{ $services->count() }} records out of {{ $services->total() }} total, starting on record {{ $services->firstItem() }}, ending on record {{ $services->lastItem() }}
                                </p>  
                                <nav aria-label="Page navigation example mb-2">
                                  <ul class="pagination mb-2 mb-sm-0">
                                 
                                    <li class="page-item {{ $services->onFirstPage() ? 'disabled' : '' }}">
                                      <a class="page-link" href="{{ $services->previousPageUrl() }}">
                                       
                                        <i>Previous</i>
                                      </a>
                                    </li>
                                    @for ($i = 1; $i <= $services->lastPage(); $i++)
                                      <li class="page-item {{ $services->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $services->url($i) }}">{{ $i }}</a>
                                      </li>
                                    @endfor
                          
                                    <li class="page-item {{ $services->hasMorePages() ? '' : 'disabled' }}">
                                      <a class="page-link" href="{{ $services->nextPageUrl() }}">
                                        <i>Next</i>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>
           
          
           
            
           
        </div>
    </div>
</div>
    @endsection