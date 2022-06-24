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
        <link rel="shortcut icon" href="{{url('logo.png')}}">

        {{-- Select2 --}}
        <link href="{{url('Horizontal/dist/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>

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

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">Enquiry Form</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h3 class="m-t-0 text-center">Please fill in the query form.</h3>
                                    <p class="text-muted mb-3 font-17 text-center"> Make a start by telling us a little about what you're looking for. </p>

                                    <form action="{{route('create')}}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="provinces" class="col-form-label">Provinces <span style="color: red">*</span></label>
                                                <select class="custom-select js-example-basic-multiple-province" name="provinces[]" id="provinces" multiple required>
                                                    @foreach ($provinces as $province)
                                                        <option {{old('provinces') == $province->id ? 'selected' : ''}} value="{{$province->id}}">{{$province->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('provinces')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('provinces') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="cities" class="col-form-label">City <span style="color: red">*</span></label>
                                                <select class="custom-select js-example-basic-multiple-cities" name="cities[]" id="cities" multiple required>
                                                    @foreach ($cities as $city)
                                                        <option {{old('cities') == $city->id ? 'selected' : ''}} value="{{$city->id}}">{{$city->name}}</option>
                                                    @endforeach
                                                </select>

                                                @error('cities')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('cities') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="industry" class="col-form-label">Industry</label>
                                                <select class="custom-select" name="industry_dropdown" id="industry" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Information technology">Information technology</option>
                                                    <option value="Education">Education</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Business">Business</option>
                                                    <option value="other">Other</option>
                                                </select>

                                                @error('industry')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('industry') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-3 d-none" id="other-industry">
                                                <label for="type" class="col-form-label">Other Industry (If any)</label> <br>
                                                <input class="form-control" type="text" name="industry">

                                                @error('type')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('type') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="type" class="col-form-label">Type</label>
                                                <select class="custom-select" name="type_dropdown" id="type" required>
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="Field survey">Field survey</option>
                                                    <option value="Specific survey">Specific survey</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Event">Event</option>
                                                    <option value="Customised service">Customised service</option>
                                                    <option value="other">Other</option>
                                                </select>

                                                @error('type')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('type') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3 d-none" id="other-type">
                                                <label for="type" class="col-form-label">Other Type (If any)</label> <br>
                                                <input class="form-control" type="text" name="type">

                                                @error('type')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('type') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                                @enderror
                                            </div>

                                        </div>


                                        <h4 class="m-t-0">How can we help you?</h4>
                                        <div class="form-group">
                                            <div>
                                                <label>Give us more details about your market research enquiry <span style="color: red">*</span></label>
                                            </div>
                                            <div>
                                                <textarea class="form-control" rows="5" id="example-textarea" name="details"></textarea>
                                            </div>

                                            @error('details')
                                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('details') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                            @enderror

                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               <?php echo date("Y"); ?> &copy; <a href="javascript::void(0)">Market Research Pakistan </a>
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

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{url('Horizontal/dist/assets/js/vendor.min.js')}}"></script>

        <!-- knob plugin -->
        <script src="{{url('Horizontal/dist/assets/libs/jquery-knob/jquery')}}.knob.min.js"></script>

        {{-- Select2 --}}
        <script src="{{url('Horizontal/dist/assets/libs/select2/select2.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{url('Horizontal/dist/assets/libs/morris-js/morris')}}.min.js"></script>
        <script src="{{url('Horizontal/dist/assets/libs/raphael/raphael.min')}}.js"></script>

        <!-- Dashboard init js-->
        <script src="{{url('Horizontal/dist/assets/js/pages/dashboard.init')}}.js"></script>

        <!-- App js -->
        <script src="{{url('Horizontal/dist/assets/js/app.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple-province').select2();
            });

            $(document).ready(function() {
                $('.js-example-basic-multiple-cities').select2();
            });

            $('#industry').change(function(){
                if($(this).val() == "other")
                {
                    $('#other-industry').removeClass("d-none");
                }
                else
                {
                    $('#other-industry').addClass("d-none");
                }

            });


            $('#type').change(function(){
                if($(this).val() == "other")
                {
                    $('#other-type').removeClass("d-none");
                }
                else
                {
                    $('#other-type').addClass("d-none");
                }

            });

        </script>
    </body>
</html>
