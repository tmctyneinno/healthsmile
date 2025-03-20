
<!-- Start footer section -->
{{-- <div id="map"></div> --}}

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">
            <img 
            style="background-color: #fff; padding: 8px"
            alt="Logo" width="80"  class="d-inline-block align-text-top"
            src="{{ asset('assets/images/logo.png')}}"/>
          </h2>
          <p>
            We are a dental health wellness organisation promoting preventive dental health care. 
            A lot of dental health problems ...
            <a style="color: #007bff" href="{{ route('home.about') }}" >Click About </a>
          </p>
           
        </div>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
          <li class="ftco-animate">
            <a href="https://www.linkedin.com/company/healthy-smiling-ireland" target="_blank"><span class="icon-linkedin"></span></a>
         </li>
          {{-- <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
          <li class="ftco-animate">
            <a href="https://www.instagram.com/healthsmilingireland" target="_blank"><span class="icon-instagram"></span></a>
         </li>
        </ul>
      </div>
      <div class="col-md-2">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="{{ route('home.about') }}" class="py-2 d-block">About</a></li>
            <li><a href="{{ route('home.services') }}" class="py-2 d-block">Service</a></li>
            <li><a href="{{ route('home.gallery') }}" class="py-2 d-block">Gallery</a></li>
            <li><a href="{{ route('home.blog') }}" class="py-2 d-block">Blog</a></li>
            <li><a href="{{ route('home.contact') }}" class="py-2 d-block">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 pr-md-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Recent Blog</h2>
          
          <div class="block-21 mb-4 d-flex">
            @forelse ($posts as $item)
            {{-- <a class="blog-img mr-4" style="background-image: url('{{ asset('assets/images/image_2.jpg')}}');"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> March 17, 2025</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div> --}}
            @empty
              <p>No Blog found</p>
            @endforelse
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Office</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@healthysmilingireland.ie</span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank">Heathy Smiling</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>




<!-- End footer section -->


<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/aos.js')}}"></script>
<script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('assets/js/jquery.timepicker.min.js')}}"></script>
<script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{ asset('assets/js/google-map.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>

<style>
    /* Increase font size of Toastr */
    #toast-container > .toast {
        font-size: 22px; /* You can change 18px to any size you want */
    } 
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": "3000",
            "positionClass": "toast-top-right"
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
        
        @if(session('status'))
            toastr.success("{{ session('status') }}");
        @endif

        @if($errors->any()) 
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    });
</script>
{{-- https://risingtheme.com/html/demo-newvilla/newvilla/contact.html --}}


