<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="mm-active">
                <a class="has-arrow ai-icon" href="{{ route('admin.index') }}" aria-expanded="false">
                    <i class="flaticon-dashboard-1"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.service.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Service</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.blog.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Blog</span>
                </a>
            </li>

            
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.booking.index') }}" aria-expanded="false">
                    <i class="flaticon-381-book"></i>
                    <span class="nav-text">Booking</span>
                   
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.booking.index') }}">Booking Apponitment</a></li>

                </ul>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="{{ route('admin.transaction.index') }}" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Transaction</span>
                </a>
            </li>
           
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-settings"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse">
                    
                    <li>
                        <a  href="{{route('admin.about-us')}}" aria-expanded="false">About us</a>
                    </li>
                   
                    <li>
                        <a  href="{{route('admin.testimonials.index')}}" aria-expanded="false">Testimonials</a>
                    </li>
                    <li>
                        <a  href="{{route('admin.faq.index')}}" aria-expanded="false">FAQs</a>
                    </li>
                    <li>
                        <a  href="{{route('admin.menu.index')}}" aria-expanded="false"> Manage Menu</a>
                    </li>
                    <li>
                        <a  href="{{route('admin.slider.index')}}" aria-expanded="false"> slider</a>
                    </li>
                    <li>
                        <a  href="{{ route('admin.settings.content') }}" aria-expanded="false">Contents</a>
                    </li>
                    <li>
                        <a  href="{{ route('admin.show.password') }}" aria-expanded="false">Reset Password</a>
                    </li>
                </ul>
            </li>
        </ul>
    
        <div class="copyright">
            <p><strong> </strong> ©  <span id="current-year"></span> All Rights Reserved</p>
            <p>by Heathy Smiling</p>
        </div>
    </div>
</div>
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>