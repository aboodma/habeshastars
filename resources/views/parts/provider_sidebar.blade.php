<div class="col-lg-3 left">
    <div class="mb-3 border rounded list-sidebar overflow-hidden bg-white">
        <div class="box-title p-3 border-bottom">
          <h6 class="m-0">Menu</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li>
                <a class="p-3 d-inline-block w-100 border-bottom text-muted @if (Route::is('provider.dashboard')) active-menu   @endif" href="{{route('provider.dashboard')}}"> <i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
          <li>
            <a class="p-3 d-inline-block w-100 border-bottom text-muted @if (Route::is('provider.profile')) active-menu   @endif" href="{{route('provider.profile')}}"> <i class="fa fa-address-card-o"></i> My Profile</a>
          </li>
          <li>
            <a class="p-3 d-inline-block w-100 border-bottom text-muted @if (Route::is('provider.services')) active-menu   @endif" href="{{route('provider.services')}}"> <i class="fa fa-gears"></i> My Services</a>
          </li>
          <li>
            <a class="p-3 d-inline-block w-100 border-bottom text-muted" href="#Breadcrumb"> <i class="fa fa-cart-plus"></i> My Orders</a>
          </li>

          <li>
            <a class="p-3 d-inline-block w-100 border-bottom text-muted" href="#Breadcrumb"> <i class="fa fa-sign-out"></i> Logout</a>
          </li>
          
          
        </ul>
      </div>
</div>