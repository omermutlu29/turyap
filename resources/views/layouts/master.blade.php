<!DOCTYPE html>
<html lang="tr">
@include('includes.head')
<body>

<!--Loader-->
@include('includes.loader')
<!-- Loader end -->
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header Container -->
    @include('includes.header')
    <div class="clearfix"></div>
    <!-- Titlebar -->
    @include('includes.breadcrumb',['title'=>$title ? $title : ''])
    <!-- Content -->
        @yield('content')
    <!-- Footer -->
    <div class="margin-top-65"></div>
    @include('includes.footer')
    <!-- Footer / End -->
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>
</div>
<!-- Wrapper / End -->
<!-- Sign In Popup -->
@include('includes.login_modal')
<!-- Sign In Popup / End -->
<!-- Scripts -->
@include('includes.script')
</body>
</html>
