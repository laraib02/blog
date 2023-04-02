<!doctype html>
<html lang="en">

@include('frontend.layouts.head')

<body>
@include('frontend.layouts.nav')

{{--ya jo content ha is ma home page show krein gy--}}
@yield('content')

@include('frontend.layouts.footer')

@include('frontend.layouts.script')



</body>

</html>
