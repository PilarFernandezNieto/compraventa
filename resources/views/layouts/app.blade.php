<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light"
      data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Mercado Plus') }}</title>
    @include('partials.head')
</head>


<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @include('partials.header')

    <!-- ========== App Menu ========== -->
    @include('partials.menu')

    <!-- Left Sidebar End -->

    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')

        <!-- End Page-content -->

        @include('partials.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!--start back-to-top-->
@include('partials.top')
<!--end back-to-top-->


<!-- JAVASCRIPT -->
@include('partials.scripts')
@yield('scripts')
</body>

</html>
