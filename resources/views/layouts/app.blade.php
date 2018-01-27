<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />


    
      
    <style>
body {
    background-color: rgb(159, 211, 235);opacity:0.8;
}
.navbar{
    background-color: rgb(0, 102, 196);
}


div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 100%;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 200%;
    height: 300px;
}

div.desc {
    padding: 2px;
    text-align: center;
}

.header {
    background-color: #F1F1F1;
    text-align: center;
    padding: 20px;
}
.column {
    float: center;
    width: 100.33%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
.footer {
    background-color: #F1F1F1;
    text-align: center;
    padding: 10px;
}

.img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-pils navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color: white; font-size: 22px;" href="{{ url('/') }}"><span></span>
                        {{ config('app.name', 'Yokida-Gallery') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul style="text-color: black; font-size: 20px;" class="nav navbar-nav navbar-pils navbar-right text-dark">
                        <!-- Authentication Links -->

                        @guest
                            <li><a href="{{'/about' }}">About</a></li>
                            <li><a href="{{'/DOWNLOADS' }}">Downloads</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                        @else
                            <li><a href="{{'/about' }}">About</a></li>
                            <li><a href="{{ 'DOE' }}">Downloads</a></li>
                            <li><a href="{{'/albums/create' }}">Create Album</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                   <li><a href="/user/{{Auth::user()->id}}/myalbums">My Albums</a></li>
                                    <li><a href="/user/{{Auth::user()->id}}/profile">Profile</a></li>
                                    
                                    <li>
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-btn fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>                                        
                                    </li>
                                    
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @include('inc.footer')
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
