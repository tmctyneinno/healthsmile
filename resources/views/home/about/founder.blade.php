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
                            Omotanwa Sulaiman is an Ireland based dental health wellness coach and founder of the dental
                            health wellness organisation- <b>Healthy Smiling Ireland.</b>
                            Her mission is to reach many people in promoting preventive dental health care through her fun,
                            interactive and informative dental health education with her online and onsite dental coaching and
                            counselling sessions.
                            </p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                      <div>
                            <p>
                                She trained, qualified and registered as a dental nurse in the United Kingdom. She also holds an
                                M.Sc. in Leadership and Management from the University of St. Marks & St. Johns Plymouth, United
                                Kingdom. She is a recipient and graduate of the Rethink Ireland accelerator programme. She is also
                                registered with the Irish Dental Council.
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
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset('assets/images/gallery/img_funder.png')}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
                                <h2 class="mb-2">Experience</h2>

                                <p>
                                    She is keen to reach many people based on her own personal childhood dental trauma, she lost
                                    about 5 teeth as a young girl due to a lack of dental health education, and from that experience
                                    developed a passionate desire to promote a preventative dental health care approach primarily
                                    through dental education, information activities and hand holding sessions for uncertain and nervous
                                    patients.
                                </p>
                                <p>
                                    Also fondly known as Erin (which means smile in her native language in Nigeria, West Africa) Erin has
                                    brought her passion and experience from West Africa - where she has run a similar social enterprise
                                    for over 14 years - promoting oral health education and designing dental health care intervention
                                    projects for the public in West Africa - in partnership with multinational organisations like Unilever,
                                    Proctor & Gamble, former GSK now Haleon, private & public dental clinics, governmental and
                                    non-governmental organisations.
                                </p>
                                <p>
                                    She has hosted a 23 radio station syndicated dental health show in Nigeria, West Africa. She has also
                                    published a free tri-annual dental health magazine in West Africa for many years, of the same name -
                                    Erin Magazine with a print run of 10,000 per edition thus reaching over 30,000 people per edition.
                                </p>
                                <p>
                                    Her fun and interactive dental education has seen her visit schools, communities, groups,
                                    organisations to promote dental health which has helped people understand how to take care of
                                    their teeth better thus leading overall healthier lives.
                                </p>
                                <p>
                                    She also reaches the vulnerable, the underserved and the disadvantaged communities.
                                    She has over 18 years work experience hand holding, supporting, training, educating, promoting
                                    dental health activities in and out of the surgery
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
                <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url({{ asset('assets/images/about.jpg')}});">
                </div>
                <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <div>
                                <h2 class="mb-2">APPROACH</h2>

                                <p>
                                    In partnership with the South West Kerry Family Resource Centre, She developed and delivered an
                                    interactive and fun dental educational workshop for 150 school children from Junior Infants to 6
                                    th
                                    Class in Scoil Saidhbhin primary school in Cahersiveen, Co. Kerry – each child got a Healthy Smiling
                                    Ireland toothbrushing chart and a pair of toothbrush from Hygiene Hub.
                                </p>
                                <p>
                                    Erin has also developed and delivered a series of fun and educational online and on-site dental
                                    education and workshops for children, their parents and other adults in the immigrant community in
                                    Kerry and continues to run oral health education wellbeing programmes for individuals,
                                    organisations, communities, groups etc
                                </p>
                                <p>
                                    Through Healthy Smiling Ireland, she is open to collaborating with individuals, organisations –
                                    governmental and non- governmental both for profit and non-profit organisations in promoting
                                    preventive dental education and raising healthy smiling champions.
                                </p>
                                
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
