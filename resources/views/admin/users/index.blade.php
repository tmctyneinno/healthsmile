@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Students</a></li>
                
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
                            <h3 class="card-title">Student List</h3>
                        </div>
                        {{-- <div class="clearfix text-center">
                            <a href="{{route('admin.user.create')}}" class="btn btn-primary">Add Post</a>
                        </div> --}}
                    </div>

                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>DATE   </th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $index => $data)
                                        <tr>
                                            <td><strong>{{  $index + 1 }}</strong></td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            
                                            <td>{{ $data->created_at->format('d F Y') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    {{-- <a class="btn btn-primary " style="margin-right: 5px;" href="{{ route('admin.users.edit',  encrypt($data->id) ) }}">Edit</a> --}}
                                                    <a class="btn btn-danger" href="{{ route('admin.users.destroy', encrypt($data->id) )  }}" onclick="return confirm('Are you sure you want to delete this User?');">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No User found.</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>

                            {{-- <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="mb-2 me-3">
                                    Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}, showing {{ $posts->count() }} records out of {{ $posts->total() }} total, starting on record {{ $posts->firstItem() }}, ending on record {{ $posts->lastItem() }}
                                </p>  
                                <nav aria-label="Page navigation example mb-2">
                                  <ul class="pagination mb-2 mb-sm-0">
                                 
                                    <li class="page-item {{ $posts->onFirstPage() ? 'disabled' : '' }}">
                                      <a class="page-link" href="{{ $posts->previousPageUrl() }}">
                                       
                                        <i>Previous</i>
                                      </a>
                                    </li>
                                    @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                      <li class="page-item {{ $posts->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                                      </li>
                                    @endfor
                          
                                    <li class="page-item {{ $posts->hasMorePages() ? '' : 'disabled' }}">
                                      <a class="page-link" href="{{ $posts->nextPageUrl() }}">
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