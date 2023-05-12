<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <h4 style="padding-top: 25px">Welcome again Restaurant </h4><img style="width: 40px;padding-left: 10px" src="{{asset('fes.png')}}">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        @if(\App\Models\Restaurant::where('user_id',Auth::user()->id)->first())
                            <div class="avatar avatar-online">
                                <img src="{{url('images/restaurants/'.\App\Models\Restaurant::where('user_id',Auth::user()->id)->first()->logo)}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        @endif
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{url('images/restaurants/'.\App\Models\Restaurant::where('user_id',Auth::user()->id)->first()->logo)}}" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{\App\Models\Restaurant::where('user_id',Auth::user()->id)->first()->restaurant_name}}</span>
                                    <small class="text-muted">{{auth()->user()->email}}</small>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                    <li>
                        <a class="dropdown-item" href="{{route('/')}}">
                            <i class="bx bx-home me-2"></i>
                            <span class="align-middle">Website</span>
                        </a>
                        <a class="dropdown-item" href="{{route('profile.index')}}">
                            <i class="bx bx-user-circle me-2"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                    </li>
                        <a class="dropdown-item" href="{{route('restaurant.logout')}}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
