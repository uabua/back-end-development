<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <title>{{ $title ?? 'No Title' }}</title>
</head>
<body class="{{ $theme }}">
<header>
    <div>
        @include('components.logo')
        @include('components.header')
    </div>
</header>

@yield('content')

@if($show_footer)
    @include('components.footer')
@endif
</body>
</html>
