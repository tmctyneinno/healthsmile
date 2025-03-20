@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Services</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Service Keeps you Smile</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
      
  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Service Keeps you Smile</h2>
            <p>Everybody’s got teeth! Everybody needs teeth! Plus, prevention is better than cure.</p>
          
        </div>
      </div> 
      <div class="row">
        @forelse ($services as $item)
          <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate fadeInUp ftco-animated">
            <div class="staff">
              <div class="img mb-4" style="background-image: url('{{ asset($item->image) }}');"></div>
              <div class="info text-center">
                <h3><a href="">{{$item->title}}</a></h3>
                <div class="text">
                  <p>
                    {!! Str::limit($item->content, 50) !!}
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
				@empty
					<p>No service found</p>
				@endforelse
				
      
      </div>
    </div>
  </section>

 

  
@endsection
