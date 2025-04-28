@extends('layouts.app')

@section('content')
   <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('assets/images/service/bg_3.png')}}'); object-fit: cover; width: 100%; height: 300px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index-2.html">Home</a></span> <span>Blog</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Read Our Blog</h1>
            </div>
            </div>
        </div>
        </div>
    </section>
      
      <section class="ftco-section">
          <div class="container">
              <div class="row">
                @forelse ($posts as $item)
                  <div class="col-md-8">
                      <div class="row">
                        <div class="col-md-12 ftco-animate">
                          <div class="blog-entry">
                            <a href="#" class="block-20" style="background-image: url('{{ asset($item->image)}}');">
                            </a>
                            <div class="text d-flex py-4">
                              <div class="meta mb-3">
                                <div><a href="#">Sep. 20, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                              </div>
                              <div class="desc pl-sm-3 pl-md-5">
                                  <h3 class="heading"><a href="#">{{$item->title}}</a></h3>
                                  <p> {!! Str::limit($item->content, 50) !!}</p>
                                  <p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                      <div class="col">
                        <div class="block-27">
                          <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> 
                  </div> 
                @empty
                  <p>No Blog found</p>
                @endforelse
                  
                  <!-- END: col-md-8 -->
                  <div class="col-md-4 sidebar ftco-animate">
          
         

          {{-- <div class="sidebar-box ftco-animate">
            <h3>Recent Blog</h3>
            
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url('{{ asset('assets/images/image_3.jpg')}}');"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div> --}}


        </div>
              </div>
          </div>
      </section>
@endsection