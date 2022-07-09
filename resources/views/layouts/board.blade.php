<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    @yield('scripts')
    
    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <!-- navbar with just a back button -->
    <div class="navbar-container">
        <div class="navbar-back">
            @yield('back_url')
                <img src="{{ asset('img/back.jpg') }}" alt="back" class="navbar-back-img">
            </a>
        </div>
    </div>

   @yield('content')

</body>
</html>