<!doctype html>
{{-- Determine language and directionality --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{-- Add dir="rtl" if needed based on locale --}}>

<head>
    <meta charset="utf-8">
    {{-- Title with fallback --}}
    <title>{{ $contactDetials->company_name ?? config('app.name', 'User Dashboard') }}</title>

    {{-- Meta Tags --}}
    <meta name="description" content="User Dashboard for {{ $contactDetials->company_name ?? config('app.name') }}"> {{-- Basic description --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow"> {{-- Prevent indexing of user dashboards --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon with fallback --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contactDetials->favicon ?? 'favicon.ico') }}">

    {{-- Theme detection script (needs to run early) --}}
    <script>
        // Apply theme based on localStorage or system preference before rendering
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("dark");
        } else if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("dark"); // Explicitly remove if set to light
        }
        // Consider adding a default class (e.g., 'light') if neither condition is met initially
        // else { document.documentElement.classList.add("light"); }
    </script>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vendor CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/plugins/swiper-bundle.min.css') }}"> {{-- Already included below? Check if needed twice --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Custom Theme CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/creat-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/chat.css') }}">

    {{-- Vite Directives for React/JS --}}
    @viteReactRefresh
    @vite('resources/js/app.jsx') {{-- This will include your compiled JS/CSS from Vite --}}

    {{-- Inline styles (Consider moving to a CSS file if they grow) --}}
    <style>
        .dashboard__chart--box__inner {
            height: 317px;
            padding-left: 0px;
        }
        .sold-out__progress-bar__field {
            max-width: 200px;
            width: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        .dashboard__page--wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Use vh for full viewport height */
        }
        main.main__content_wrapper { /* Assuming your @yield content is wrapped in main */
            flex-grow: 1; /* Allows main content to fill available space */
        }
        footer {
            margin-top: auto; /* Pushes the footer to the bottom */
            flex-shrink: 0; /* Prevents footer from shrinking */
        }
        .copy-success, .copy-fail {
            font-size: 14px;
            margin-left: 8px;
            animation: fadeInOut 3s forwards;
        }
        .copy-success { color: #28a745; }
        .copy-fail { color: #dc3545; }

        .referral-code {
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .referral_code {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
            max-width: 100%;
        }
        @keyframes fadeInOut {
            0%, 100% { opacity: 0; }
            10%, 90% { opacity: 1; }
        }
        #toast-container > .toast { /* Target Toastr specifically */
            font-size: 16px;
        }
    </style>

    {{-- Add any page-specific styles using @stack('styles') if needed --}}
    @stack('styles')

</head>

<body>
    {{-- Main page wrapper for layout --}}
    <div class="dashboard__page--wrapper">

        @include('user.partial.navbar')
        @include('user.partial.sidebar')

        {{-- Main content area --}}
        <main class="main__content_wrapper"> {{-- Added a main tag, adjust class if needed --}}
            @yield('content')
        </main>

        @include('user.partial.footer')

    </div>

    {{-- Core Vendor JS (jQuery is often included in bundles or needed first) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- Include Bootstrap JS if your template components rely on it --}}
    <script src="{{ asset('assets/admin/js/vendor/bootstrap.bundle.min.js') }}"></script> {{-- Assuming path --}}

    {{-- Other Vendor JS --}}
    <script src="{{ asset('assets/admin/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins/glightbox.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Custom Theme JS (Load after vendors) --}}
    {{-- Add paths to your theme's main JS files if they exist, e.g.: --}}
    {{-- <script src="{{ asset('assets/admin/js/main.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script> --}}


    {{-- Toastr Notification Script --}}
    <script>
        $(document).ready(function() { // Ensure DOM is ready
            // Initialize Select2 if needed globally
            // $('.select2').select2();

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
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
            @if (session('error'))
                toastr.error("{{ session('error') }}");
            @endif
            @if (session('warning'))
                toastr.warning("{{ session('warning') }}");
            @endif
            @if (session('info'))
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

</body>
</html>
