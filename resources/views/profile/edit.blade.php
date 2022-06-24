<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>MRP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/png">

    <!-- Notification css (Toastr) -->
    <link href="{{url('Horizontal/dist/assets/libs/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>

    <!-- Custom box css -->
    <link href="{{url('Horizontal/dist/assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{url('Horizontal/dist/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('Horizontal/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('Horizontal/dist/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>

<body data-layout="horizontal" data-topbar="dark">

<!-- Begin page -->
<div id="wrapper">

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('Horizontal/dist/assets/images/users/demo.png')}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                        {{ auth()->user()->first_name .' '. auth()->user()->last_name}} <i class="mdi mdi-chevron-down"></i>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                             <a href="{{route('profile')}}" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                this.closest('form').submit();" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </form>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="{{route('home')}}" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{url('logo2.png')}}" alt="" height="48">
                            <span style="color: white">Home</span>
                        </span>
                        <span class="logo-sm">
                            <img src="{{url('logo2.png')}}" alt="" height="32">
                            <span style="font-size: 10px;color: white">Home</span>
                        </span>
                    </a>
                    {{--                            <a href="index.html" class="logo logo-dark">--}}
                    {{--                                <span class="logo-lg">--}}
                    {{--                                    <img src="assets/images/logo-dark.png" alt="" height="16">--}}
                    {{--                                </span>--}}
                    {{--                                <span class="logo-sm">--}}
                    {{--                                    <img src="assets/images/logo-sm.png" alt="" height="24">--}}
                    {{--                                </span>--}}
                    {{--                            </a>--}}
                </div>

                <div class="clearfix"></div>
            </div> <!-- end container-fluid-->
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="{{route('index')}}"><i class="mdi mdi-format-list-bulleted"></i>Enquiry History</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{route('create')}}"><i class="mdi mdi-view-dashboard"></i>Enquiry Form</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="card-box mt-3">

                            <h4 class="header-title mt-0 mb-3 text-center">Update Profile Details</h4>

                            <form action="{{route('profile')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" parsley-trigger="change" id="email" placeholder="Enter email" class="form-control" value="{{auth()->user()->email}}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input class="form-control @error('current_password') parsley-error @enderror" type="password" id="current_password" name="current_password" placeholder="Enter your current password">

                                    @error('current_password')
                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false">
                                        <li class="parsley-required"> @foreach ($errors->get('current_password') as $error) <li>{{ $error }}</li> @endforeach </li></ul>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input class="form-control @error('password') parsley-error @enderror" type="password" name="password" id="password" placeholder="Enter your password">

                                    @error('password')
                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false">
                                        <li class="parsley-required"> @foreach ($errors->get('password') as $error) <li>{{ $error }}</li> @endforeach </li></ul>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm new password</label>
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-purple btn-block" type="submit"> Update </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo date("Y"); ?> &copy; <a href="javascript:void(0)">Market Research Pakistan </a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            {{-- <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Vendor js -->
<script src="{{url('Horizontal/dist/assets/js/vendor.min.js')}}"></script>

<script src="{{url('Horizontal/dist/assets/libs/toastr/toastr.min.js')}}"></script>

<script src="{{url('Horizontal/dist/assets/js/pages/toastr.init.js')}}"></script>

<!-- third party js -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

<!-- Datatables init -->
{{--        <script src="{{url('Horizontal/dist/assets/js/pages/datatables.init.js')}}"></script>--}}

<!-- Modal-Effect -->
<script src="{{url('Horizontal/dist/assets/libs/custombox/custombox.min.js')}}"></script>

<!-- App js -->
<script src="{{url('Horizontal/dist/assets/js/app.min.js')}}"></script>

<script>
    $('#myTable').DataTable( {
        responsive: true,
        scrollX: true

    } );

</script>

@if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-full-width",
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "6000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-full-width",
            "onclick": null,
            "showDuration": "500",
            "hideDuration": "1000",
            "timeOut": "6000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error("{{ session('error') }}");
    </script>
@endif

</body>
</html>

