<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        a:link, a:visited {
          text-decoration: none;
          
        }
          </style>

</head>
<body>
    <div id="app">
                <div class="w3-top">
                    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                      <a href="{{ url('/') }}" class="w3-bar-item w3-button bg-dark text-white"><b class="text-white">E-Learning</b> Platform</a>
                      <a href="{{ url('/#courses') }}" class="w3-bar-item w3-button">Courses</a>
                    <a href="{{ url('/#tutors') }}" class="w3-bar-item w3-button">Tutors</a>
                
                      <!-- Float links to the right. Hide them on small screens -->
                      <div class="w3-right w3-hide-small">
                        <a href="{{ route('content')}}" class="w3-bar-item w3-button">Content</a>
                
                        @guest
                            <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
                        
                            
                        @endguest
                        @if (Auth::check())
                            <a class="w3-bar-item w3-button" href="{{ route('dash') }}">Dashboard</a>
                        @endif
                      </div>
                    </div>
                </div>
        

        <main class="mt-5 py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
