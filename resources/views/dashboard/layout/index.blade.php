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
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                            <p class="mb-4">
                                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                                your profile.
                                            </p>

                                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img
                                                src="{{asset('assets/dashboard/assets/img/illustrations/man-with-laptop-light.png')}}"
                                                height="140"
                                                alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                            />
                                        </div>
                                    </div>
                                </div>
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
