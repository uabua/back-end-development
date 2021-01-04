<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>


<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('genre.index') }}">Genres</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('musician.index') }}">Musicians</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('album.index') }}">Albums</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('joins') }}">Joins</a>
    </li>
</ul>

<div class="container">
    @yield('content')
</div>

</body>
</html>
