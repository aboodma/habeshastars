<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <title>Miver - LMS & Freelance Services Marketplace for Businesses HTML Template</title>

    <link rel="icon" type="image/png" href="images/fav.svg">

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/vendor/fontawesome/css/font-awesome.min.css')}}">
    <link href="{{asset('vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">

    <link href="{{asset('vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">

    <link href="{{asset('vendor/select2/css/select2-bootstrap.css')}}" />
    <link href="{{asset('vendor/select2/css/select2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link href="{{asset('css/style.css')}}" rel="stylesheet">



    @yield('style')

    <style>
        .readed{
            background-color: silver;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light topbar  shadow-sm bg-white osahan-nav-top px-1  ">
        <div class="container">

            <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>

            <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" style="border-top-left-radius:20px;border-bottom-left-radius:20px;padding:20px"
                        class="form-control bg-white small" placeholder="Find Services..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-dark"
                            style="border-top-right-radius:20px;border-bottom-right-radius:20px;" type="button">
                            <i class="fa fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search fa-fw"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                @guest
                <li class="nav-item dropdown no-arrow no-caret mr-3 ">
                    <a class="btn btn-outline-danger pink-btn" id="navbarDropdownAlerts" href="{{route('login')}}"
                        role="button">
                        Login
                    </a>

                </li>
                <li class="nav-item dropdown no-arrow no-caret mr-3 ">
                    <a class="btn btn-outline-secondary sec-btn" id="navbarDropdownAlerts" href="{{route('register')}}"
                        role="button">
                        Sign Up
                    </a>

                </li>
                <li class="nav-item dropdown no-arrow no-caret mr-3 ">
                    <a class="btn btn-outline-secondary sec-btn" href="{{route('be_our_partner')}}" role="button">
                        Be Our Partner
                    </a>

                </li>
                @endguest
                @auth
                <li class="nav-item dropdown no-arrow no-caret mr-3 ">
                    <a class="btn btn-outline-secondary sec-btn" id="navbarDropdownAlerts"
                        href="@if(auth()->user()->user_type == 1){{route('provider.dashboard')}} @elseif(auth()->user()->user_type == 0){{route('customer_dashboard')}} @else {{route('admin.home')}}  @endif"
                        role="button">
                        Profile
                    </a>

                </li>
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle " style="background: #f1f2f500"
                        id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        @if( auth()->user()->notifications->where('is_read',0)->count() != 0)
                        <i style="font-size: smaller;color:#ba6089 !important" class="fa fa-circle text-success" ></i>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow  "
                        aria-labelledby="navbarDropdownAlerts">
                        

                        @foreach(auth()->user()->notifications->sortBy('created_at') as $notification)
                        <a @if(!$notification->is_read) onclick="MarkRead({{$notification->id}})" @endif  class="dropdown-item dropdown-notifications-item @if($notification->is_read) readed @endif" 
                        @if($notification->type == 0  && auth()->user()->user_type == 1)
                            href="{{route('provider.orders',"onGoing")}}" 
                         @elseif($notification->type == 0  && auth()->user()->user_type == 0)
                            href="{{route('customer.orders')}}"
                          @elseif($notification->type == 1  && auth()->user()->user_type == 1)
                            href="{{route('provider.orders',"history")}}"
                          @elseif($notification->type == 0  && auth()->user()->user_type == 0)
                            href="{{route('customer.orders')}}"

                         @endif>
                            <div class="dropdown-notifications-item-icon bg-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-plus">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">{{$notification->created_at->diffForHumans()}}</div>
                                <div class="dropdown-notifications-item-content-text">{{$notification->msg}}</div>
                            </div>
                        </a>
                        @endforeach
                        <a class="dropdown-item dropdown-notifications-footer" href="alerts.html">View All Alerts</a>
                    </div>

                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
                    <button class="btn btn-icon btn-transparent-dark dropdown-toggle" style="background: #f1f2f500"
                        id="navbarDropdownAlerts" href="{{ route('logout') }}" role="button"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </button>

                </li>


                @endauth


            </ul>
        </div>
    </nav>

    @yield('content')



    <footer class="bg-white">
        <div class="container">
            <hr>
            <div class="d-flex justify-content-evenly">
                <div class="footer-list">
                    <div class="logo ml-5">
                        <a href="{{route('welcome')}}">
                            <img style="width: 10rem" src="{{asset('images/logo.png')}}">
                        </a>
                    </div>
                </div>
                <div class="footer-list">

                    <ul class="list">
                        <li><a href="#">How we work </a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-list">

                    <ul class="list">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>

                    </ul>
                </div>

            </div>
            <div class="copyright">
                <p>© Copyright 2022 Narabana. All Rights Reserved
                </p>
                <ul class="social">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        < script src = "{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"
        type = "3ebbb932e316a3ee2377425e-text/javascript" >

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="{{asset('js/jqBootstrapValidation.js')}}" type="3ebbb932e316a3ee2377425e-text/javascript"></script>
    <script src="{{asset('js/contact_me.js')}}" type="3ebbb932e316a3ee2377425e-text/javascript"></script>

    <script src="{{asset('vendor/slick-master/slick/slick.js')}}" type="3ebbb932e316a3ee2377425e-text/javascript"
        charset="utf-8">
    </script>

    <script src="{{asset('vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}"
        type="3ebbb932e316a3ee2377425e-text/javascript"></script>

    <script src="{{asset('vendor/select2/js/select2.min.js')}}" type="3ebbb932e316a3ee2377425e-text/javascript">
    </script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @yield('script')
    <script src="{{asset('js/custom.js')}}" type="3ebbb932e316a3ee2377425e-text/javascript"></script>
    <script>
        $(document).ready(function () {
            //change the integers below to match the height of your upper div, which I called
            //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
            //to figure out what the scroll position is when exactly you want to fix the nav
            //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
            //you know the position.
            $(window).scroll(function () {

                console.log($(window).scrollTop());

                if ($(window).scrollTop() > 200) {
                    $('.navbar').addClass('fixed-top');
                }

                if ($(window).scrollTop() < 201) {
                    $('.navbar').removeClass('fixed-top');
                }
            });
        });

        function MarkRead(id) {
            $.ajax({
                url:"{{route('notify_read')}}",
                type:"POST",
                data:{"_token":"{{csrf_token()}}","id":id},
                
            })
        }

    </script>
</body>



</html>
