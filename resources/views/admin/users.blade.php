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
                            <a href="{{route('admin.profile')}}" class="dropdown-item notify-item">
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
                                    <span style="color: white">Market Research Pakistan</span>
                                </span>
                        <span class="logo-sm">
                                    <img src="{{url('logo2.png')}}" alt="" height="32">
                                    <span style="font-size: 10px;color: white">Market Research Pakistan</span>
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
                            <a href="{{route('admin.index')}}"><i class="mdi mdi-format-list-bulleted"></i>Enquires</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{route('admin.users')}}"><i class="mdi mdi-account-group"></i>Users</a>
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-center">
                            <h3 class="page-title">List of users</h3>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <table id="myTable" class="display responsive flex-wrap" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User name</th>
                                    <th>Company Name</th>
                                    <th>Contact Person's Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Account type</th>
                                    <th>User route</th>
{{--                                    <th>date</th>--}}
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td> @if($user->first_name != null) {{$user->first_name. ' '. $user->last_name}} @else N/A @endif </td>
                                        <td>@if($user->company_name != null) {{$user->company_name}} @else N/A @endif </td>
                                        <td>@if($user->contact_name != null) {{$user->contact_name}} @else N/A @endif </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        @php $country = DB::table('countries')->where('id', $user->country)->first(); @endphp
                                        <td> {{ $country->name }}</td>
                                        <td> @if($user->type == 0) Individual @else Company @endif </td>
                                        <td> {{ $user->mobile_user }}</td>
{{--                                        <td> {{ $user->created_at }}</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->

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
        scrollX: true,
        // "order": [[ 'created_at', "desc" ]]
        // order: [[ 'created_at', "desc" ]]
        // "aaSorting": [[ 8, "desc" ]]

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
