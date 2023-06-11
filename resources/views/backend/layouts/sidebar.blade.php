<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon">
          <img src="@foreach(\App\Models\Settings::all() as $data) {{$data->logo}} @endforeach" alt="logo" style="width: 40px">
      </div>
        @if(auth()->user()->role == 'res')
            <div class="sidebar-brand-text mx-3">Restaurant</div>
        @else
            <div class="sidebar-brand-text mx-3">Admin</div>
        @endif
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Banner
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Media Manager</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Banners</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Banner Options:</h6>
            @if(auth()->user()->role == 'res')
                <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
            @else
                <a class="collapse-item" href="{{route('res-banners')}}">Banners</a>
            @endif
             @if(auth()->user()->role == 'res')
                <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
            @else
            @endif
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Shop
        </div>

    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Category</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category Options:</h6>
            <a class="collapse-item" href="{{route('category.index')}}">Category</a>
            @if(auth()->user()->role == 'res')
            @else
                  <a class="collapse-item" href="{{route('category.create')}}">Add Category</a>
            @endif
          </div>
        </div>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span>Products</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Options:</h6>
              @if(auth()->user()->role == 'admin')
                  <a class="collapse-item" href="{{route('res-products')}}">Products</a>
              @else
                  <a class="collapse-item" href="{{route('product.index')}}">Products</a>
              @endif
              @if(auth()->user()->role == 'res')
                  <a class="collapse-item" href="{{route('product.create')}}">Add Product</a>
              @else
              @endif
          </div>
        </div>
    </li>

    {{-- Shipping --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
          <i class="fas fa-truck"></i>
          <span>Shipping</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Shipping Options:</h6>
            <a class="collapse-item" href="{{route('shipping.index')}}">Shipping</a>
              @if(auth()->user()->role == 'res')
                  <a class="collapse-item" href="{{route('shipping.create')}}">Add Shipping</a>
              @else
              @endif
          </div>
        </div>
    </li>

    <!--Orders -->

    @if(auth()->user()->role == 'res')
        <li class="nav-item">
            <a class="nav-link" href="{{route('order.index')}}">
                <i class="fas fa-hammer fa-chart-area"></i>
                <span>Orders</span>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('res-orders')}}">
                <i class="fas fa-hammer fa-chart-area"></i>
                <span>Orders</span>
            </a>
        </li>
    @endif


    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Products Reviews</span></a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('res_review.index')}}">
            <i class="fas fa-comments"></i>
            <span>Restaurant Reviews</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
    <div class="sidebar-heading">
        General Settings
    </div>

    @if(auth()->user()->role == 'res')
        <li class="nav-item">
            <a class="nav-link" href="{{route('coupon.index')}}">
                <i class="fas fa-table"></i>
                <span>Coupon</span></a>
        </li>
    @else
    @endif

     <!-- Users -->
    @if(auth()->user()->role == 'res')
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
    @endif
<!-- Users -->
    @if(auth()->user()->role == 'res')
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{route('restaurants.index')}}">
                <i class="fas fa-home"></i>
                <span>Restaurants</span></a>
        </li>
@endif

@if(auth()->user()->role == 'res')
@else
    <!-- General settings -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('settings')}}">
                <i class="fas fa-cog"></i>
                <span>Settings</span></a>
        </li>
@endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
