<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
@include('dashboard.layout.head')
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        {{--Start Aside--}}
        @include('dashboard.shared.aside')
        {{--End Aside--}}

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            @include('dashboard.shared.nav')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                   <div class="row">
                       <div class="card" style="width: 18rem;">
                           <div class="card-body">
                               <h5 class="card-title">Clients</h5>
                               <h6 class="card-subtitle mb-2 text-muted">+200</h6>
                           </div>
                       </div>
                       <div class="card" style="width: 18rem;margin-left: 15px">
                           <div class="card-body">
                               <h5 class="card-title">Restaurants</h5>
                               <h6 class="card-subtitle mb-2 text-muted">+200</h6>
                           </div>
                       </div>
                   </div>

                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('dashboard.shared.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
@include('dashboard.layout.scripts')
</body>
</html>
