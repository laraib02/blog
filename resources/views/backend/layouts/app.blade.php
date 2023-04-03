<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

@include('backend.layouts.nav')
<div id="layoutSidenav">
@include('backend.layouts.sidenav')

@yield('content')
</div>
@include('backend.layouts.footer')
@include('backend.layouts.script')


</html>
