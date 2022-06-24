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

    <!-- Bootstrap Css -->
    <link href="{{url('Horizontal/dist/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('Horizontal/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('Horizontal/dist/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

<div class="account-pages mt-0 mb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    {{-- <a href="#" class="logo">
                        <img src="{{url('logo.png')}}" alt="" height="100" class="logo-light mx-auto">
                    </a> --}}
                    <p class="mt-2 mb-1 font-italic">
                        <a href="{{url('/')}}" style="font-size: 25px; color: white;">Market Research Pakistan</a>
                    </p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-2">
                            <h4 class="text-uppercase mt-0">Enter your details</h4>
                        </div>

                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="flex col-md-4">
                                        <label for="first_name">Gender *</label>
                                        <select class="custom-select" name="gender" id="gender" required>
                                            <option value="" disabled selected>Select</option>
                                            <option {{old('gender') == 'Mr' ? 'selected' : ''}} value="Mr">Mr</option>
                                            <option {{old('gender') == 'Mrs' ? 'selected' : ''}} value="Mrs">Mrs</option>
                                            <option {{old('gender') == 'Miss' ? 'selected' : ''}} value="Miss">Miss</option>
                                        </select>

                                        @error('gender')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('gender') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div>
                                    <div class="flex col-md-8">
                                        <label for="first_name">First Name *</label>
                                        <input class="form-control @error('first_name') parsley-error @enderror" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{old('first_name')}}" required>

                                        @error('first_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('first_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name *</label>
                                <input class="form-control @error('last_name') parsley-error @enderror" type="text" name="last_name" id="last_name" placeholder="Last name" value="{{old('last_name')}}" required>

                                @error('last_name')
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('last_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input class="form-control @error('email') parsley-error @enderror" type="email" name="email" id="email" placeholder="Enter email ID" value="{{old('email')}}" required>

                                @error('email')
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false">
                                    <li class="parsley-required"> @foreach ($errors->get('email') as $error) <li>{{ $error }}</li> @endforeach </li></ul>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone *</label>
                                <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter phone number" required>

                                @error('phone')
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('phone') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="resume">Upload CV *</label>
                                <input class="form-control" type="file" name="resume" id="resume" required>

                                @error('resume')
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">@foreach ($errors->get('resume') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signup" name="terms" required>
                                    <label class="custom-control-label" for="checkbox-signup">I accept <a href="{{route('terms')}}" target="_blank" class="text-blue">Privacy Policy and Terms & Conditions</a></label>
                                </div>

                                @error('terms')
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">Please read and accept terms of service and privacy policy.</li></ul>
                                @enderror
                            </div>
{{--                            <div class="form-group mb-0 text-center">--}}
{{--                                <button class="btn btn-primary btn-block" type="submit">Verify</button>--}}
{{--                            </div>--}}

                        </form>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

{{--                <div class="row mt-0">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        <p class="text-white">Already verified? <a href="{{route('login')}}" class="text-dark ml-1"><b style="color: blue">Sign In</b></a></p>--}}
{{--                    </div> <!-- end col -->--}}
{{--                </div>--}}
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<!-- Vendor js -->
<script src="{{url('Horizontal/dist/assets/js/vendor.min.js')}}"></script>

<!-- App js -->
<script src="{{url('Horizontal/dist/assets/js/app.min.js')}}"></script>

</body>
</html>

