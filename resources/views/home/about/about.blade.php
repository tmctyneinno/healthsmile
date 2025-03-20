@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel mb-5">
    <div class="slider-item bread-item" style="background-color:black" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container" data-scrollax-parent="true">
        <div class="row slider-text align-items-end">
          <div class="col-md-7 col-sm-12 ftco-animate mb-5">
            <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section-2">
    <div class="container-wrap">
      <div class="row d-flex no-gutters">
          <div class="col-md-6 img" style="background-image: url({{ asset('assets/images/service/img_1.png')}});">
          </div>
          <div class="col-md-6 ">
              <div class="about-wrap">
                  <div class="heading-section heading-section-white mb-5 ftco-animate">
                <h2 class="mb-2">We Offer High Quality Services</h2>
                <p>
                  We are a dental health wellness organisation promoting preventive dental health care. A lot of dental health problems can be avoided if only education and very early intervention is available to everyone. These dental health problems has led to lots of challenges such as pain, loss of teeth, mental health challenges, compromised quality of life, social exclusion and even malnutrition to name a few.
                </p>
                <p>
                  Healthy Smiling Ireland promotes dental health wellbeing through it’s interactive, fun and informative oral health prevention education and activities providing support to the populace online and onsite.
                </p>
                <p>
                  Online, the general public are able to book sessions with our oral health coach by listening to them, understand their individual dental health challenges, support them in finding the best solution suitable to their individual needs to achieve optimum oral health which supports their overall wellbeing. 
                  Onsite, the general public are also able to book sessions for us to visit their locations across the country to deliver dental awareness and provide support according to their needs as either groups or individuals.
                </p>
                <p>
                  We work with individuals, groups, organisations, schools and communities across Ireland at a venue of their choosing to help people lead healthier lives knowing that our oral health plays a significant part of our overall wellbeing, knowing what to do, how to do what to do and also when to do it as it relates to dental health in very important.
                </p>
                <p>
                  No matter where you are in the oral health care journey, we are here to hold your hand while educating you about the next best steps in your journey to a healthy mouth thus, a healthy life. 
                </p>

              </div>
               
                 
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

                    <a class="nav-link active" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

                    <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our vision</a>
                  </div>
                </div>
                <div class="col-md-12 d-flex align-items-center">
                  
                  <div class="tab-content ftco-animate" id="v-pills-tabContent">


                    <div class="tab-pane fade show active" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                      <div>
                          <h2 class="mb-4">To Accomodate All Patients</h2>
                          <p>
                            To empower children and adults to understand and practice healthy dental habits through education and varying intervention activities which promote prevention of dental challenges now and in their lifetime.
                          </p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                      <div>
                          <h2 class="mb-4">Help Our Customers Needs</h2>
                            <p>To nurture lifelong dental health champions.</p>
                            <br>
                            <br>
                            <br>
                          </div>
                    </div>
                  </div>
                </div>
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
          <span class="subheading">Our Happy Customer Says</span>
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

  {{-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-flex align-items-center">
              <div class="col-md-3 aside-stretch py-5">
                  <div class=" heading-section heading-section-white ftco-animate pr-md-4">
              <h2 class="mb-3">Achievements</h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
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
                      <strong class="number" data-number="4500">0</strong>
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
  </section> --}}

@endsection
