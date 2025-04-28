@extends('layouts.app')
<style>
	.text-overlay {
		background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
		padding: 20px; /* Add some padding around the text */
		border-radius: 10px; /* Optional: Add rounded corners */
		color: #fff; /* Ensure the text color is white or light */
	}
</style>
@section('content')
<main >

   
    <section class="home-slider owl-carousel">
		@forelse ($sliders as $slider)
		<div class="slider-item" style="background-image: url('{{ asset($slider->image) }}');">
			<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text align-items-center" data-scrollax-parent="true">
						<div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text-overlay">
								<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$slider->title}}</h1>
								<p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
									{{$slider->caption}}
								</p>
								<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{ route('home.booking') }}" class="btn btn-primary px-4 py-3">Online Booking</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		@empty
			<p>No data found</p>
		@endforelse
		
	
	</section>

	

  
    <section class="ftco-section ftco-services">
     
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img" style="background-image: url({{ asset($aboutUs->image) }});">
      		</div>
      		<div class="col-md-6 d-flex">
				<div class="about-wrap">
					<div class="heading-section heading-section-white mb-5 ftco-animate">
				  <h2 class="mb-2">{{$aboutUs->title }}</h2> 
				  <p class="text-justify"> 
					{{ Str::limit(strip_tags($aboutUs->content), 900) }}
				  </p>
				  <a style="color: #fff" href="{{ route('home.about') }}" >View More </a>
				  
				</div>
      		</div>
      	</div>
      </div>
    </section>




   
		
	{{-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('assets/images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('assets/images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

	
	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row justify-content-center mb-2 mt-4 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-2">Our Activites</h2>
				</div>
			</div>

			<div class="row no-gutters">
				<!-- Image 1 -->
				<div class="col-md-3 ftco-animate">
					<a href="{{ asset('assets/images/gallery/img_1.png') }}" data-lightbox="gallery" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_1.png') }});">
						<div class="icon mb-4 d-flex align-items-center justify-content-center"></div>
					</a>
				</div>
				<!-- Image 2 -->
				<div class="col-md-3 ftco-animate">
					<a href="{{ asset('assets/images/gallery/img_2.png') }}" data-lightbox="gallery" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_2.png') }});">
						<div class="icon mb-4 d-flex align-items-center justify-content-center"></div>
					</a>
				</div>
				<!-- Image 3 -->
				<div class="col-md-3 ftco-animate">
					<a href="{{ asset('assets/images/gallery/img_5.png') }}" data-lightbox="gallery" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_5.png') }});">
						<div class="icon mb-4 d-flex align-items-center justify-content-center"></div>
					</a>
				</div>
				<!-- Image 4 -->
				<div class="col-md-3 ftco-animate">
					<a href="{{ asset('assets/images/gallery/img_4.png') }}" data-lightbox="gallery" class="gallery img d-flex align-items-center" style="background-image: url({{ asset('assets/images/gallery/img_4.png') }});">
						<div class="icon mb-4 d-flex align-items-center justify-content-center"></div>
					</a>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
           </div>
        </div>
        <div class="row">
			@forelse ($posts as $item)
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
					<a href="#" class="block-20" style="background-image: url('{{ asset('assets/images/image_1.jpg')}}');">
					</a>
					<div class="text d-flex py-4">
						<div class="meta mb-3">
						<div><a href="#">Sep. 20, 2018</a></div>
						<div><a href="#">Admin</a></div>
						<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
						</div>
						<div class="desc pl-3">
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
						</div>
					</div>
					</div>
				</div>
			@empty
				<p>No Blog found</p>
			  @endforelse
        </div>
      </div>
    </section>
		
	<section class="ftco-section-parallax mt-5 ">
		<div class="parallax-img d-flex align-items-center">
		  <div class="container">
			<div class="row d-flex justify-content-center">
			  <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<h2>Subcribe to our Newsletter</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
				<div class="row d-flex justify-content-center mt-5">
				  <div class="col-md-8">
					<form action="#" class="subscribe-form">
					  <div class="form-group d-flex">
						<input type="text" class="form-control" placeholder="Enter email address">
						<input type="submit" value="Subscribe" class="submit px-3">
					  </div>
					</form>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
		
 
   
</main>
@endsection
