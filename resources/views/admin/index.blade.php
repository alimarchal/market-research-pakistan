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
                            <a href="{{route('admin.index')}}"><i class="mdi mdi-format-list-bulleted"></i>Enquiries</a>
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
                            <h3 class="page-title">List of enquiries</h3>
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
                                    <th>Enquiry #</th>
                                    <th>Date</th>
                                    <th>Provinces</th>
                                    <th>Cities</th>
                                    <th>Industry</th>
                                    <th>Research Type</th>
                                    <th>Details</th>
                                    <th>Enquiry route</th>
                                    <th>Enquiry status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($queries as $query)
                                    <tr>
                                        <td> <a href="{{route('user_details', $query->user_id)}}">{{$query->id}}</a> </td>
                                        <td>{{\Carbon\Carbon::parse($query->created_at)->format('d-m-Y')}}</td>
                                        <td class="ctext-wrap">
                                            @foreach ($query->provinces as $provinces)
                                                {{$provinces['name']}} @if (!$loop->last) {{', '}} @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($query->cities as $city)
                                                {{$city['name'] }} @if (!$loop->last) {{', '}} @endif
                                            @endforeach
                                        </td>
                                        <td>{{$query->industry}}</td>
                                        <td>{{$query->type}}</td>
                                        <td>
                                            <a href="#custom-modal-{{$loop->iteration}}" class="btn btn-primary btn-sm waves-effect" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- POP-UP Custombox Model for details  --}}
                                            <div id="custom-modal-{{$loop->iteration}}" class="modal-demo">
                                                <button type="button" class="close" onclick="Custombox.modal.close();">
                                                    <span>&times;</span><span class="sr-only">Close</span>
                                                </button>
                                                <h4 class="custom-modal-title">Query Details</h4>
                                                <div class="custom-modal-text">
                                                    {{$query->details}}
                                                </div>
                                            </div>
                                        </td>
                                        <td> {{ $query->mobile_query }}</td>
                                        <td>
                                            <label for="query_status">
                                                <select class="form-group" name="status" id="query_status" onchange="updateQueryStatus({{$query->id}}, $(this).val())">
                                                    @foreach($statuses as $status)
                                                        <option {{ ($query->status == $status->id) ? 'selected' : ' ' }} value="{{$status->id}}"> {{$status->name}} </option>
                                                    @endforeach
{{--                                                    <option {{ ($query->status == 'Pending') ? 'selected' : ' ' }}>Pending</option>--}}
{{--                                                    <option {{ ($query->status == 'In Review') ? 'selected' : ' ' }}>In Review</option>--}}
{{--                                                    <option {{ ($query->status == 'Quoted') ? 'selected' : ' ' }}>Quoted</option>--}}
{{--                                                    <option {{ ($query->status == 'Completed') ? 'selected' : ' ' }}>Completed</option>--}}
{{--                                                    <option {{ ($query->status == 'Closed') ? 'selected' : ' ' }}>Closed</option>--}}
                                                </select>
                                            </label>
                                        </td>
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

    } );

    function updateQueryStatus(id, status) {

        $.ajax({
            type:'POST',
            url:'{{route('update.query.status')}}',
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                status: status,
            },
            success: function (response) {
                if (response.status === 'success') {
                    alert('Status Updated Successfully.');
                } else if (response.status === 'error') {
                    alert('Something went wrong try again.');
                }
            }
        })
    }

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
