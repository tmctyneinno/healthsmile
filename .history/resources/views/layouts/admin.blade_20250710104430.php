<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contactUs->favicon ?? 'favicon.ico')  }}"> {{-- Added a fallback favicon --}}

    {{-- ****** Add/Update Open Graph Tags Here ****** --}}
    <meta property="og:title" content="{{ $contactUs->company_name ?? config('app.name', 'Healthy Sm') }}" />
    <meta property="og:description" content=" We are a dental health wellness organisation promoting preventive dental health care. A lot of dental health problems can be avoided if only education and very early intervention is available to everyone. These dental health problems has led to lots of challenges such as pain, loss of teeth, mental health challenges, compromised quality of life, social exclusion and even malnutrition to name a few." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" /> 
    <meta property="og:image" content="{{ asset($contactUs->favicon ?? '') }}" /> 
    <meta property="og:image:width" content="1200" /> 
    <meta property="og:image:height" content="630" /> 
    {{-- Open Graph tags (Optional for Admin, but good practice to have basic ones) --}}
    <meta property="og:title" content="{{ $contactUs->company_name ?? config('app.name', 'Admin Panel') }}">
  
    {{-- No need for og:image usually in admin --}}

    <!-- Vendor CSS -->
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    {{-- Removed duplicate responsive.css link if it's included in the one below --}}
    <link href="{{ asset('backend/vendor/datatables/responsive/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/nestable2/css/jquery.nestable.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- Removed jQuery/Toastr JS from head - should be loaded before closing </body> --}}

</head>

<body>
    <div id="main-wrapper"> 
        @include('admin.partials.navbar') {{-- Corrected include syntax --}}
        @include('admin.partials.sidebar') {{-- Corrected include syntax --}}

        <!--**********************************
            Content body start
        ***********************************-->
        <main>
            {{-- You might want a row/col structure here depending on your content --}}
            @yield('content')
        </main>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://morgansconsortium.com/"
                        target="_blank"> The Morgans</a> <span id="currentYear"></span> </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js') }}"></script> {{-- Load this first --}}
    <script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chartjs/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('backend/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Vectormap -->
    <script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('backend/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('backend/vendor/peity/jquery.peity.min.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/responsive/responsive.js') }}"></script>
    <script src="{{ asset('backend/vendor/js/plugins-init/datatables.init.js') }}"></script>
 
    <!-- Dropzone -->
    <script src="{{ asset('backend/vendor/dropzone/dist/dropzone.js') }}"></script>

    <!-- Nestable -->
    <script src="{{ asset('backend/vendor/nestable2/js/jquery.nestable.min.js') }}"></script>

    <!-- CKEditor -->
    <script src="{{ asset('backend/vendor/ckeditor/ckeditor.js') }}"></script>

    <!-- Dashboard specific & Custom scripts -->
    <script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('backend/js/custom.min.js') }}"></script>
    <script src="{{ asset('backend/js/deznav-init.js') }}"></script>

    {{-- Removed duplicate global.min.js --}}

    <!-- Toastr JS (jQuery is included in global.min.js or loaded separately above) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Footer Year Update -->
    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>

    <!-- Carousel Initialization -->
    <script>
        function carouselReview() {
            /* testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: true,
                dots: false,
                navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
                responsive: {
                    0: { items: 1 },
                    480: { items: 1 },
                    767: { items: 1 },
                    1000: { items: 1 }
                }
            });
            /* Custom Navigation work */
            jQuery('#next-slide').on('click', function() {
                $('.testimonial-one').trigger('next.owl.carousel');
            });
            jQuery('#prev-slide').on('click', function() {
                $('.testimonial-one').trigger('prev.owl.carousel');
            });
        }

        jQuery(window).on('load', function() {
            // Use document ready for DOM manipulations, window load for things dependent on images/resources
            setTimeout(function() {
                carouselReview();
            }, 500); // Reduced timeout slightly
        });
    </script>

    <!-- Toastr Notification Script -->
    <script>
        $(document).ready(function() { // Ensure DOM is ready
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right", // Common position
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000", // 5 seconds
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            @if (session('status'))
                toastr.success("{{ session('status') }}");
            @endif
            @if (session('success'))
                toastr.success("{{ session('success') }}");
            @endif
            @if (session('error')) // Added for error messages
                toastr.error("{{ session('error') }}");
            @endif
            @if (session('warning')) // Added for warning messages
                toastr.warning("{{ session('warning') }}");
            @endif
            @if (session('info')) // Added for info messages
                toastr.info("{{ session('info') }}");
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        });
    </script>

    {{-- Add any page-specific scripts using @stack('scripts') if needed --}}
    @stack('scripts')

    {{-- Inline style for Toastr font size (can be moved to CSS file) --}}
    <style>
        #toast-container > .toast {
            font-size: 16px; /* Adjusted font size */
        }
    </style>

</body>

</html>
