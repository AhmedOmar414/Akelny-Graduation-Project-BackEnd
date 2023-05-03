<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
@include('admin.dashboard.layout.head')
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        {{--Start Aside--}}
        @include('admin.dashboard.shared.aside')
        {{--End Aside--}}

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            @include('admin.dashboard.shared.nav')
            <!-- / Navbar -->

            <!-- Content wrapper -->
           @yield('content')
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
@include('admin.dashboard.layout.scripts')
@yield('js')
</body>
</html>
