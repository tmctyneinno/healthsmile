@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel mb-5">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Online Booking</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Online Booking</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

 
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset('assets/images/gallery/img_funder.png')}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
                                <h2 class="mb-2">Online Booking</h2>
                                <p>
                                We understand that some people just may prefer a private, personal and confidential chat about the
                                state of their oral health, what they should do, why this is happening to them and understanding the
                                next best steps in gaining your smile back and an overall healthy mouth…
                                Or just maybe you just need encouragement/hand holding to visit your dentist after a past bad
                                dental experience…
                                </p>
                                <p>
                                Or you need to have a general understanding about your dental health, dental diseases and you want
                                to learn tips and tricks to improve/maintain a healthy mouth…
                                We offer our dental coaching and counselling session online with our Dental Health Coach Erin. Her
                                empathic approach is based on her own personal dental experience, professional experience and
                                knowledge.
                                </p>
                                <p>
                                Want to have a personal and private talk and find support about past dental trauma, anxiety about
                                dental appointments, pain from tooth decay, mouth odour challenges, toothbrushing, healthy dental
                                habits, general practical and positive support in achieving optimum oral health for yourself?
                                Then book a 30 minutes Healthy Smiles Coaching and Counselling session with Erin for 25 Euros.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <p><b>HOW TO BOOK A HEALTHY SMILES COACHING WITH ERIN</b></p>
                    <ul>
                        <li>Use the Calendar below to choose a suitable date and time.</li>
                        <li> Input your name.</li>
                        <li>Input your email (where you will get your meeting zoom link)</li>
                        <li>In the message box, briefly state you would like to discuss about your oral health with Erin.</li>
                        <li>Payment confirms booking for 1 person -  <b>(25 Euros)</b></li>
                        <li>Pay and expect your zoom link before your chosen date.</li>
                    </ul>
                    <br>
                    <p><b>ONLINE CLIENTS GET</b></p>
                    <ul>
                        <li>Personalised fun, interactive, informative and practical dental coaching and counselling based
                            on your individual needs.
                        </li>
                        <li>
                            Floss picks or interdental brushes – Adults who want this should indicate and give a postal
                            address too
                        </li>
                        <li>
                            Children clients get sent a healthy smiling champion dental certificate and toothbrushing chart sent to an address of parent/guardian’s choosing if desired.
                        </li>
                    
                    </ul>
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <h5 class="modal-title" >Fill the details below </h5>
                    <form action="{{ route('home.book.session') }}" method="POST" id="payment-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <!-- <label for="appointment_date" class="text-black">Date</label> -->
                            <input type="text" class="form-control appointment_date" name="appointment_time" required placeholder="Date">
                        </div>  
                        <div class="form-group">
                            <!-- <label for="appointment_message" class="text-black">Message</label> -->
                            <textarea name="message" id="appointment_message" class="form-control" cols="30" rows="5" placeholder="Message"></textarea>
                        </div>
                        
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_KEY') }}"
                            data-amount="2500"
                            data-currency="eur"
                            data-name="Healthy Smiles Coaching"
                            data-description="Session Booking (25 Euros)"
                            data-locale="auto">
                        </script>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </section>

    
 

  

@endsection
