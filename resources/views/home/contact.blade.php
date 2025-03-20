@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Contact Us</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-4">
          {{-- <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p> --}}
          {{-- <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p> --}}

        </div>
        <div class="col-md-4">
          <p><span>Email:</span> <a href="mailto:info@healthysmilingireland.ie">: info@healthysmilingireland.ie</a></p>
        </div>
        <div class="col-md-4">
          <p><span>Website</span> <a href="www.healthysmilingireland.ie">www.healthysmilingireland.ie</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <h5>For More Inquiries, you can reach out:</h5>
          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required>
          </div>
          <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
          </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6" id="map">
          
        </div>
      </div>
    </div>
  </section>

@endsection