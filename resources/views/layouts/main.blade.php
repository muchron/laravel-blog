<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        a {
            text-decoration: none;
        }

    </style>
    <title>{{ $title }}</title>
</head>

<body>

    @include('layouts.__navbar')

    <div class="container mt-4">
        <h1 class="text-center mb-3" >
            @if (request('category') && $posts->count())
                Post by Categories : {{ $posts[0]->category->name}}            
            @elseif(request('author') && $posts->count())
                Post By Author: {{ $posts[0]->user->name}}            
            @else
                {{ $title }}
            @endif
        </h1>
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>
