<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield("title","Ogani | Shop")</title>
    @yield("before_css")
    @include("admin.layouts.head-admin")
    @yield("after_css")
</head>

<body>


@include("admin.layouts.header-admin")

{{--@include("layouts.nav-admin")--}}


<!-- Product Section Begin -->
<section class="product spad">
    @yield("main")
</section>
<!-- Product Section End -->

@include("admin.layouts.footer-admin")

@yield("before_js")
@include("admin.layouts.scripts-admin")
@yield("after_js")
</body>
</html>
