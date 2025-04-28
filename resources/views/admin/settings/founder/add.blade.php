<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Founder </h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                
                <form method="POST" action="{{ isset($founder) ? route('admin.founder.update', $founder->id) : route('admin.founder.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if(isset($founder))
                        @method('PUT')
                    @endif  
                    <div class="row"> 
                         
                        
                        
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Bio statement</label>
                            <textarea id="content" class="form-control"  name="bio" rows="8" spellcheck="false" required> {{ isset($founder) ? $founder->bio : '' }} </textarea>
                        </div> 
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Qualification statement</label>
                            <textarea id="content" class="form-control"  name="qualification" rows="8" spellcheck="false" required> {{ isset($founder) ? $founder->qualification : '' }} </textarea>
                        </div> 
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Bio Image</label>
                            <input type="file" class="form-control @error('bio_img') is-invalid @enderror" name="bio_img" onchange="bioImage(event, 'bio_img')">
                            @error('bio_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($founder) && $founder->bio_img)
                                <img src="{{ asset($founder->bio_img) }}" alt="Current Vision Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="vision_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>
                        
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Experience statement</label>
                            <textarea id="mission" class="form-control"  name="experience" rows="8" spellcheck="false" required> {{ isset($founder) ? $founder->experience : '' }} </textarea>
                        </div>
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Experience Statement Image</label>
                            <input type="file" class="form-control @error('experience_img') is-invalid @enderror" name="experience_img" onchange="previewImage(event, 'mission_img')">
                            @error('experience_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($founder) && $founder->experience_img)
                                <img src="{{ asset($founder->experience_img) }}" alt="Current Mission Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="experience_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>

                        <div class="mb-3 col-md-10">
                            <label class="form-label">Approach statement</label>
                            <textarea id="approach" class="form-control"  name="approach" rows="8" spellcheck="false" required> {{ isset($founder) ? $founder->approach : '' }} </textarea>
                        </div>
                        <div class="mb-3 col-md-10">
                            <label class="form-label">Approach Statement Image</label>
                            <input type="file" class="form-control @error('approach_img') is-invalid @enderror" name="approach_img" onchange="previewImage(event, 'approach_img')">
                            @error('approach_img')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            @if(isset($founder) && $founder->approach_img)
                                <img src="{{ asset($founder->approach_img) }}" alt="Current Mission Image" class="img-thumbnail mt-2" width="200">
                            @endif
                            <img id="approach_img" src="" alt="Image Preview" class="img-thumbnail mt-2" style="display:none; max-width: 200px;">
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($founder) ? 'Update' : 'Add' }}</button>
                </form>
                <script>
                   function bioImage(event, imgId) {
                        const input = event.target;
                        const preview = document.getElementById(imgId);
                        
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

{{-- CKEditor CDN --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
    // Initialize CKEditor
    ClassicEditor.create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor.create( document.querySelector( '#mission' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor.create( document.querySelector( '#approach' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
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