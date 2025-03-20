<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
      <a class="navbar-brand" href="index-2.html">
          {{-- Denta<span>Care</span> --}}
          <img 
              style="background-color: #fff; padding: 8px"
              alt="Logo" width="80"  class="d-inline-block align-text-top"
              src="{{ asset('assets/images/logo.png')}}"
          />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
      </button> 

      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
              <!-- About Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('home.about')}}"  >
                  About
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="{{ route('home.founder')}}">Our Founder</a>
                </div>
            </li>
              <!-- Services Dropdown Menu -->
              <li class="nav-item dropdown"> 
                  <a class="nav-link dropdown-toggle" href="{{ route('home.services')}}" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                  </a>
                  <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                      <a class="dropdown-item" href="{{ route('home.services')}}">Children Groups</a>
                      <a class="dropdown-item" href="{{ route('home.services')}}">Parents Groups</a>
                      <a class="dropdown-item" href="{{ route('home.services')}}">Schools (Primary & Secondary)</a>
                      <a class="dropdown-item" href="{{ route('home.services')}}">Teachers Groups</a>
                      <a class="dropdown-item" href="{{ route('home.services')}}">Community Groups</a>
                      <a class="dropdown-item" href="{{ route('home.services')}}">Employees Wellbeing Events Groups</a>
                  </div>
              </li>

              <li class="nav-item"><a href="{{ route('home.blog')}}" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="{{ route('home.workshops')}}" class="nav-link">Onsite Workshops</a></li>
              <li class="nav-item"><a href="{{ route('home.gallery')}}" class="nav-link">Gallery</a></li>
              <li class="nav-item"><a href="{{ route('home.contact')}}" class="nav-link">Contact</a></li>
              <li class="nav-item cta">
                  <a href="{{ route('home.booking')}}" class="nav-link" >
                      <span> Online Booking</span>
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>
<!-- END nav -->