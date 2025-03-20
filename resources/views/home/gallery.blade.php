@extends('layouts.app')

@section('content')
<main >

    <section class="home-slider owl-carousel mb-5">
        <div class="slider-item bread-item" style="background-color:black"  data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
              <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Gallery</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Gallery</h1>
              </div>
            </div>
          </div>
        </div>
    </section>

   


		
	<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_1.png')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_2.png')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_5.png')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    				
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_4.png')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

 
		
		
 
   
</main>
@endsection
