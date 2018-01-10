<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gallery') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css" rel="stylesheet">
    <link href="../assets/foundation/foundation.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <div id="app" class="row">
        @include('inc.messages')
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('foundation/foundation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
</body>
</html>
