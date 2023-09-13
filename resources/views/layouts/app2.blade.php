<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css"/>
    <title>Document</title>
    <style>
        .active{
            color: red;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
{{-- Now add boostrap 5 to Header--}}
@include('layouts.nav')
{{-- app2... is the master page --}}
{{-- index2... is the child page --}}
{{-- about2... is the child page --}}

@yield('content')
@include('layouts.footer')
</body>
</html>

