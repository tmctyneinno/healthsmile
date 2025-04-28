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
          <p><span>Email:</span> <a href="mailto:info@healthysmilingireland.ie">: {{ $contactUs->first_email}} </a></p>
        </div>
        <div class="col-md-4">
          <p><span>Website</span> <a href="www.healthysmilingireland.ie"> {{ $contactUs->website_link}}</a></p>
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

        <div class="col-md-6" >
          {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9825432.093872178!2d-18.92647473324282!3d53.0421629403268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4859bae45c4027fb%3A0xcf7c1234cedbf408!2sIreland!5e0!3m2!1sen!2sng!4v1742471461961!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
      </div>
    </div>
  </section>

@endsection