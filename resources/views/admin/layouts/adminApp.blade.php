<!DOCTYPE html>
<html lang="en" class="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') | onthi360</title>
        @include('admin.partials.head')
        {{-- <style>
        
            .form-control:invalid + .tox {
                border: 1px solid #dc3545; /* Red border color for TinyMCE editor */
            }
            
        </style> --}}

    </head>

    <body class="py-5 md:py-0 o">
        <!-- Mobile Menu -->
        {{-- @include('admin.partials.mobileMenu') --}}

        <!-- Top Bar -->
        @include('admin.partials.topBar')

        <div class="flex overflow-hidden">
            <!-- Side Menu -->
            @include('admin.partials.sideMenu')

            <!-- Content -->
            <div class="content">
                <div class="p-2">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('backend/dist/js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/lucide"></script>

    </body>

</html>
