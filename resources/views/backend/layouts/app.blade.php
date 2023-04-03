<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')
<body class="sb-nav-fixed">
@include('backend.layouts.nav')
<div id="layoutSidenav">
    @include('backend.layouts.sidenav')
    <div id="layoutSidenav_content">
        <main>
    @yield('content')
        </main>
    </div>
</div>
@include('backend.layouts.footer')
@include('backend.layouts.script')
</body>
</html>
