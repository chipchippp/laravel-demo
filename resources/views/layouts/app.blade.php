<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="/"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css"/>
    <title>@yield("title","T2210A Laravel Demo")</title>
</head>
<body>
@include("layouts.nav")







<main>
    @yield("main")
</main>
@include("layouts.footer")
</body>
</html>
