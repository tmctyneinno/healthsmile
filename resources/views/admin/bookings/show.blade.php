@extends('layouts.admin')
@section('content')


     <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto d-lg-block d-block">
                    <h2 class="text-black font-w600">Transactions</h2>
                    <p class="mb-0">Welcome to  {{ $contactUs->company_name ?? ''}} backend</p>
                </div>
                <a href="{{route('admin.transaction.index')}}" class="btn btn-primary rounded light">View Transactions</a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 align-center">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">View Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                @if(session('success'))
                                    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                
                                
                                <form method="POST"  action="" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" placeholder="Question" name="question" id="question" value="{{ $transaction->booking->name }}" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" placeholder="Question" name="question" id="question" value="{{ $transaction->booking->email }}" required>
                                        </div>
                                    </div>
                                   
                                    <div class="mb-3 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label">Message</label>
                                        <div class="col-sm-9">
                                            <div  class="">
                                                <textarea disabled  name="answer"  class="form-control" placeholder="Answer" required>{{ $transaction->booking->message }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                
                                    
                                   
                                </form>
                                <script>
                                    // Initialize CKEditor
                                    CKEDITOR.replace('ckeditor');

                                    function previewImage(event) {
                                        const input = event.target;
                                        const preview = document.getElementById('image-preview');
                                        
                                        if (input.files && input.files[0]) {
                                            const reader = new FileReader();
                                            
                                            reader.onload = function(e) {
                                                preview.src = e.target.result;
                                                preview.style.display = 'block';
                                            };
                                            
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           

        </div>
    </div>

@endsection