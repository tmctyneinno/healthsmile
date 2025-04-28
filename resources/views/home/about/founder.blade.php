@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel mb-5">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Our Founder</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Founder</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

 
    <section class="ftco-section">
      <div class="container">
          <div class="row d-md-flex">
              <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset('assets/images/about.jpg')}});">
              </div>
              <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                  <div class="row">
                <div class="col-md-12 nav-link-wrap mb-5">
                  <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    {{-- <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a> --}}

                    <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Bio</a>

                    <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Qualification</a>
                  </div>
                </div>
                <div class="col-md-12 d-flex align-items-center">
                  
                  <div class="tab-content ftco-animate" id="v-pills-tabContent">


                    <div class="tab-pane fade show active" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                      <div>
                            <p>
                            {!! $founder->bio !!}
                            </p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                      <div>
                            <p>
                              {!! $founder->qualification !!}
                            </p>
                          
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset($founder->experience_img )}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
                              
                              <p>
                                {!! $founder->experience !!}
                              </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset($founder->approach_img )}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
               
                               {!! $founder->approach !!}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

 

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-md-3 aside-stretch py-5">
                  <div class=" heading-section heading-section-white ftco-animate pr-md-4">
              <h2 class="mb-3">Achievements</h2>
            </div>
              </div>
              <div class="col-md-9 py-5 pl-md-5">
                  <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="14">0</strong>
                      <span>Years of Experience</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="500">0</strong>
                      <span>Qualified Dentist</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="4200">0</strong>
                      <span>Happy Smiling Customer</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18">
                    <div class="text">
                      <strong class="number" data-number="320">0</strong>
                      <span>Patients Per Year</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>

@endsection
