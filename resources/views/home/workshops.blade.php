@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel mb-5">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{ route('index') }}">Home</a></span> <span>Onsite Workshops</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Onsite Workshops</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

 
   

    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image " style="background-image: url({{ asset('assets/images/gallery/img_2.png')}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
                                <h2 class="mb-2">ON-SITE WORKSHOPS</h2>

                                <p>
                                    Our interactive, fun, educative and practical dental health awareness programmes are popular in
                                    schools, organisations, communities, meetings, staff wellness events to name a few.
                                </p>
                                <p>
                                    We help people understand the why – causes of different dental problems, the what – what these
                                    problems are the how- how to solve them and most preferably, prevent them. Having dental pain is
                                    no walk in the park- I should know! I’ve been there!
                                </p>
                                <p>
                                    Dental problems like bleeding gums, tooth decay, gum disease etc., can affect lives in many ways
                                    than one; Mental Health, Social Exclusions, Social Anxiety, Trauma, Physical Health, Loss of School
                                    time, Work Time and Cost Intensive too.
                                </p>
                                <p class="mb-2">
                                    We are here to help support your journey to a healthy mouth thus a healthier live as a whole.
                                </p>
                                <br>
                                

                                

                                    
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-md-flex mt-4">
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <h3 class="mb-4">What Our On-Site Clients Receive</h3>

                    <div class="services-list mb-4">
                        <!-- Item 1 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <p><strong>Interactive Dental Coaching:</strong> Fun, practical, and engaging sessions tailored to your needs.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <p><strong>Toothbrushing Demonstrations:</strong> Hands-on techniques to ensure proper oral care.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <p><strong>Oral Care Kits for Adults:</strong> Floss picks, interdental brushes, or toothbrushes provided.</p>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <p><strong>Healthy Smiling Champion Pack for Children:</strong> Includes a toothbrush, toothbrushing chart, and a Healthy Smiling Champion certificate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <h3 class="mb-4">We are available to be booked for your</h3>
                    <div class="services-list">
                        <!-- Item 1 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex  justify-content-center align-items-center">
                                <span class="icon-check2 mb-4 "></span>
                            </div>
                            <div class="text">
                                <p>Organisation wellbeing events for employees.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2 mb-3"></span>
                            </div>
                            <div class="text">
                                <p>Teachers Support Trainings</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2 mb-3"></span>
                            </div>
                            <div class="text">
                                <p>Personal Development events.</p>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2 mb-3"></span>
                            </div>
                            <div class="text">
                                <p>Carers ( Those caring for other family members)</p>
                            </div>
                        </div>

                        <div class="list-services d-flex ftco-animate fadeInUp ftco-animated">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2 mb-3"></span>
                            </div>
                            <div class="text">
                                <p>Team/Staff training developments.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>



 

@endsection
