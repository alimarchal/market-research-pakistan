{{--
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>MRP</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    --}}
{{-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> --}}{{--

    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-2" style="size: 50px;text-align: center">
                        <h3 class="title"><span style="color: #009900">Market Research Pakistan</span></h3>
--}}
{{--                        <strong style="font-size: 23px;">Market Research Pakistan</strong>--}}{{--

                    </div>
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" title="Click to fill the required information"
--}}
{{--                               href="{{route('register')}}"--}}{{--

                                @guest()
                                    href="#contact"
                                @endguest
                            >
                                --}}
{{-- <img src="assets/images/logo.png" alt="Logo"> --}}{{--

                                <img src="{{url('logo.png')}}" style="height: 90px;" alt="Logo">
                                <span style="text-transform: uppercase; color:black">Enquire</span>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about">About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#services">Services</a>
                                    </li>
--}}
{{--                                    <li class="nav-item">--}}{{--

--}}
{{--                                        <a href="#portfolio">Portfolio</a>--}}{{--

--}}
{{--                                    </li>--}}{{--

                                    <li class="nav-item">
                                        <a href="#blog">Blog</a>
                                    </li>
                                    @guest()
                                    <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li>
                                    @endguest
                                    <li class="nav-item">
                                        <a href="{{route('c_register')}}">Careers</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                @guest()
                                    <a class="main-btn"  href="{{route('login')}}">Sign In</a>
                                @endguest
                                @auth()
                                    <a class="main-btn"  href="{{route('index')}}">My account</a>
                                @endauth
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <span class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 38px;margin-top: 40px;">
                                Our Coverage Across Pakistan
                                Including <span>AK, GB, and FATA</span>
                            </span>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="margin-top: -34px;">
                                <strong style="font-size: 18px;">PROVINCES / TERRITORIES</strong> <br>
                                <li> <strong style="font-size: 18px;">Major Cities:</strong> </li> <span class="ml-4" style="font-size: 18px;">All cities, municipalities and towns.</span>

                                <li> <strong style="font-size: 18px;">Urban Localities:</strong> </li> <span class="ml-4" style="font-size: 18px;">All the districts as well as all cities, municipalities, towns and cantonments.</span>

                                <li> <strong style="font-size: 18px;">Districts: </strong> </li> <span class="ml-4" style="font-size: 18px;">All the districts or agencies.</span>
                            </p>
                            --}}
{{-- <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <input type="text" placeholder="username@yourdomain.com">
                                <button class="main-btn">Sign Up</button>
                            </div> --}}{{--

                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{url('PakistanMap.png')}}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">WELCOME</h6>
                        <h3 class="title"><span>Our expertise and presence on the ground </span> take care of your business goal.</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/about.png" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content pt-45">
                        <p class="text wow fadeInUp" style="font-size: 17px;" data-wow-duration="1s" data-wow-delay="0.4s">
                            MRP is a rapidly growing market research company providing its services all over Pakistan. We are proud of our leadership and expertise in connecting national and international businesses with consumers in Pakistan every day.
                            MRP partners with businesses of all sizes – from multi-national organisations to independent researchers – sourcing respondents for research across all sectors and methodologies.
                            Whether you are looking to collect information to help you make key business decisions or a particular group of consumers, we will find the information you need.
                            We have a dedicated team of fieldwork researchers across Pakistan comprising of Account Mangers, Project Managers, Project Coordinators and a network of local agents working across Pakistan to bring first hand information.
                            By partnering with you throughout your research journey and taking ownership of your goals, we provide robust, reliable data and analysis delivered in the most efficient, cost-effective way.
                            As an independent agency, MRP has worked on several diverse projects over the years. But we recognise each one is unique. That’s why our expert team offers an intelligent, tailored approach to every client it works with.
                        </p>

                        <div class="about-counter pt-60">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">350</span></span>
                                            <p class="text">Clients</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">99</span>%</span>
                                            <p class="text">Satisfaction</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="counter-shape">
                                            <span class="shape-1"></span>
                                            <span class="shape-2"></span>
                                        </div>
                                        <div class="counter-content media-body">
                                            <span class="counter-count"><span class="counter">870</span></span>
                                            <p class="text">Projects</p>
                                        </div>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- about counter -->
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== OUR SERVICE PART START ======-->

    <section id="services" class="our-services-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Our services</h6>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
--}}
{{--                                <div class="about-counter pt-60">--}}{{--

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp justify-content-center" data-wow-duration="1s" data-wow-delay="0.3s">
                                                <ul style="list-style-type:disc;text-align: left;">
                                                    <h3>Our Regular Services</h3>

                                                    <li style="margin-left: 22px;">Survey design</li>
                                                    <li style="margin-left: 22px;">Field survey</li>
                                                    <li style="margin-left: 22px;">Authentic Data collection</li>
                                                    <li style="margin-left: 22px;">Audience access</li>
                                                    <li style="margin-left: 22px;">Vox Pops</li>
--}}
{{--                                                    <a href="{{route('services', 'regularService')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>--}}{{--

                                                    <a href="{{route('services')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp justify-content-center" data-wow-duration="1s" data-wow-delay="0.9s">
                                                <ul style="list-style-type:disc;text-align: left">
                                                    <h3>On demand Services</h3>

                                                    <li style="margin-left: 22px;">Research design</li>
                                                    <li style="margin-left: 22px;">Questionnaire design</li>
                                                    <li style="margin-left: 22px;">Moderation</li>
                                                    <li style="margin-left: 22px;">Charting & Reporting</li>
                                                    <li style="margin-left: 22px;">Presentation of findings</li>
--}}
{{--                                                    <a href="{{route('services', 'onDemandService')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>--}}{{--

                                                    <a href="{{route('services')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>
                                                </ul>
                                            </div> <!-- single counter -->
                                        </div>
                                    </div> <!-- row -->
--}}
{{--                                </div> <!-- about counter -->--}}{{--

                            </div>
                        </div> <!-- row -->

                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-services-tab pt-30">
                        <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">
                                    <i class="lni-briefcase"></i> <span>Business <br> Consultancy</span>
                                </a>
                            </li>
--}}
{{--                            <li class="nav-item">--}}{{--

--}}
{{--                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">--}}{{--

--}}
{{--                                    <i class="lni-bullhorn"></i> <span>Digital <br> Marketing</span>--}}{{--

--}}
{{--                                </a>--}}{{--

--}}
{{--                            </li>--}}{{--


--}}
{{--                            <li class="nav-item">--}}{{--

--}}
{{--                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">--}}{{--

--}}
{{--                                    <i class="lni-stats-up"></i> <span>Market <br> Analysis</span>--}}{{--

--}}
{{--                                </a>--}}{{--

--}}
{{--                            </li>--}}{{--

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="assets/images/our-service-1.jpg" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Best business decisions need best market research data.</h3>
                                            <p class="text">
                                                Your competitive edge demands high-quality data collected and delivered quickly and analysed efficiently.
                                                Through our in-house data collection and analysis experts, audience access, consultants and proprietary technology, we can satisfy all of your market research needs in Pakistan.
                                            </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-1"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Consultancy<br> Agency Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="assets/images/our-service-1.jpg" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Digital Marketing  <span>for Your Business Growth.</span></h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec est arcu. Maecenas semper tortor.  <br>  <br> In elementum in risus sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis. </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-2"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Digital Marketing <br> Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>

                            <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="our-services-image mt-50">
                                            <img src="assets/images/our-service-1.jpg" alt="service">
                                        </div> <!-- our services image -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="our-services-content mt-45">
                                            <h3 class="services-title">Market Analysis  <span>for Your Business Growth.</span></h3>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec est arcu. Maecenas semper tortor.  <br>  <br> In elementum in risus sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis. </p>

                                            <div class="our-services-progress d-flex align-items-center mt-55">
                                                <div class="circle" id="circles-3"></div>
                                                <div class="progress-content">
                                                    <h4 class="progress-title">Market Analysis <br> Agency Skill.</h4>
                                                </div>
                                            </div>
                                        </div> <!-- our services content -->
                                    </div>
                                </div> <!-- row -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- our services tab -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== OUR SERVICE PART ENDS ======-->

    <!--====== SERVICE PART START ======-->

    <section id="service" class="service-area pt-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Why Us</h6>
                        <h4 class="title">The reasons to choose us <span>as your business partner</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="service-wrapper mt-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="assets/images/service-1.png" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Highly Experienced</h4>
                                <p class="text">We provide a full spectrum of market and social research services and conduct research in almost any industry across a broad range of methodologies.</p>
                            </div>
                            <div class="shape shape-1">
                                <img src="assets/images/shape/shape-1.svg" alt="shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="assets/images/shape/shape-2.svg" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service service-border d-flex">
                            <div class="service-icon">
                                <img src="assets/images/service-2.png" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Bunch of Services</h4>
                                <p class="text">As well as data collection, we also offer a full service package – from research design to report writing. We offer an unparalleled, comprehensive solution to help you understand and improve your customer's experiences.</p>
                            </div>
                            <div class="shape shape-3">
                                <img src="assets/images/shape/shape-3.svg" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-service d-flex">
                            <div class="service-icon">
                                <img src="assets/images/service-3.png" alt="Icon">
                            </div>
                            <div class="service-content media-body">
                                <h4 class="service-title">Quality Support</h4>
                                <p class="text">Our exclusive enhanced customer experience, extensive geographic coverage across Pakistan and versatile omnichannel capabilities, when coupled with our market- leading reporting and analytics platform, goes beyond any other offering.</p>
                            </div>
                            <div class="shape shape-4">
                                <img src="assets/images/shape/shape-4.svg" alt="shape">
                            </div>
                            <div class="shape shape-5">
                                <img src="assets/images/shape/shape-5.svg" alt="shape">
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-btn text-center pt-25 pb-15">
--}}
{{--                            <a class="main-btn main-btn-2" href="#">All Services</a>--}}{{--

                        </div> <!-- service btn -->
                    </div>
                </div> <!-- row -->
            </div> <!-- service wrapper -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICE PART ENDS ======-->

    <!--====== PROJECT GALLERY PART START ======-->

    --}}
{{--<section id="portfolio" class="project-masonry-area pt-115">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <div class="section-title pb-20  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <h6 class="sub-title">Portfolio</h6>
                        <h4 class="title">Portfolio <span>Gallery.</span></h4>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-8">
                    <div class="project-menu text-center text-sm-left text-lg-right pb-20">
                        <ul>
                            <li class="active" data-filter="*">See All</li>
                            <li data-filter=".apps">Apps</li>
                            <li data-filter=".branding">Branding</li>
                            <li data-filter=".creative">Creative</li>
                            <li data-filter=".laptop">Laptop</li>
                            <li data-filter=".product">Product</li>
                        </ul>
                    </div> <!-- project menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <div class="col-lg-4 col-sm-6 grid-item apps creative laptop">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-1.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-1.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-lg-4 col-sm-6 grid-item branding creative">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-2.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-2.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-lg-4 col-sm-6 grid-item apps branding product">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-3.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-3.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-lg-4 col-sm-6 grid-item laptop product">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-5.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-5.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-lg-4 col-sm-6 grid-item branding creative">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-4.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-4.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-lg-4 col-sm-6 grid-item apps laptop product">
                    <div class="single-gallery gallery-masonry mt-30">
                        <div class="gallery-image">
                            <img src="assets/images/protfolio-6.jpg" alt="protfolio">
                        </div>
                        <div class="gallery-icon">
                            <a class="image-popup" href="assets/images/protfolio-6.jpg">
                                <span></span>
                            </a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-btn mt-60 text-center">
                        <a class="main-btn" href="#">Load More</a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>--}}{{--


    <!--====== PROJECT GALLERY PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    --}}
{{--<section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-9">
                    <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Pricing Plans</h6>
                        <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="pricing-price">
                            <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">20% Off</span>
                            <h4 class="title">Basic</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="pricing-price">
                            <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">Special</span>
                            <h4 class="title">Standard</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="pricing-price">
                            <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">New</span>
                            <h4 class="title">Premium</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>--}}{{--


    <!--====== PRICING PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-70 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="section-title">
                            <h6 class="sub-title">Testimonials</h6>
                            <h4 class="title">What Client Says, About Us</h4>
                        </div> <!-- section title -->
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="quota">
                            <i class="lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="assets/images/author-1.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="assets/images/author-2.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="assets/images/author-3.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">John Doe</h5>
                                            <span class="sub-title">CEO, Alphabet</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BRAND PART START ======-->

    <div id="brand" class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/images/brand-1.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="assets/images/brand-2.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="assets/images/brand-3.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/brand-4.png" alt="brand">
                        </div> <!-- single brand -->
                        <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <img src="assets/images/brand-5.png" alt="brand">
                        </div> <!-- single brand -->
                    </div> <!-- brand wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== BRAND PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog" class="blog-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Our Blog</h6>
                        <h4 class="title">Letest <span>News.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-1.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Isabela Moreira</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-2.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Elon Musk</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-3.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-3.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Fiona</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section class="contact-area pt-120 pb-120">
        <div class="container">
            --}}
{{--<div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Our Contact</h6>
                        <h4 class="title">Get In <span>Touch.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@uideck.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+99 000 1111 555</p>
                                <p class="text">+88 999 5555 444</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->--}}{{--

            @guest()
            <div id="contact" class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> VERIFY <span>YOUR EMAIL ID.</span></h4>

                        <form id="contact-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="type">Enquiry Type *</label>
                                        <select class="custom-select" name="type" id="type" required>
                                            <option value="" disabled selected>Select</option>
                                            <option {{old('type') == '0' ? 'selected' : ''}} value="0">Individual</option>
                                            <option {{old('type') == '1' ? 'selected' : ''}} value="1">Company</option>
                                        </select>

                                        @error('type')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('type') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="country">Your Country *</label>
                                        @php
                                            $countries = DB::table('countries')->get();
                                        @endphp

                                        <select class="custom-select" name="country" id="country" required>
                                            <option value="" disabled selected>Select</option>
                                            @foreach ($countries as $country)
                                                <option {{old('country') == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('country')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('country') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="company_name">
                                    <div class="contact-form mt-45">
                                        <label for="company_name">Company Name (If any)</label>
                                        <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Enter company name">
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="first_name">
                                    <div class="contact-form mt-45">
                                        <label for="first_name">First Name *</label>
                                        <input class="form-control @error('first_name') parsley-error @enderror" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{old('first_name')}}">

                                        @error('first_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('first_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="last_name">
                                    <div class="contact-form mt-45">
                                        <label for="last_name">Last Name *</label>
                                        <input class="form-control @error('last_name') parsley-error @enderror" type="text" name="last_name" id="last_name" placeholder="Last name" value="{{old('last_name')}}">

                                        @error('last_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('last_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none " id="contact_name">
                                    <div class="contact-form mt-45">
                                        <label for="contact_name">Contact Name *</label>
                                        <input class="form-control @error('contact_name') parsley-error @enderror" type="text" name="contact_name" id="contact_name" placeholder="Contact person's name" value="{{old('contact_name')}}">

                                        @error('contact_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('contact_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>


                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="email">Email *</label>
                                        <input class="form-control @error('email') parsley-error @enderror" type="email" name="email" id="email" placeholder="Enter email ID" value="{{old('email')}}" required>

                                        @error('email')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red">
                                            <li class="parsley-required"> @foreach ($errors->get('email') as $error) <li>{{ $error }}</li> @endforeach </li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="Phone">Phone (optional)</label>
                                        <input class="form-control" type="text" name="phone" id="Phone" placeholder="Enter phone number">
                                    </div> <!-- contact-form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup" name="terms" required>
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="{{route('terms')}}" target="_blank" class="text-blue">Privacy Policy and Terms & Conditions</a></label>
                                        </div>
                                    </div> <!-- contact-form -->
                                </div>

                                <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="contact-form mt-45">
                                            <button type="submit" class="main-btn">Verify</button>
                                        </div> <!-- contact-form -->
                                    </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
            @endguest
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
        <div class="container">
            <div class="footer-widget pt-30 pb-70">
                <div class="row">
                   --}}
{{-- <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                        <div class="footer-about pt-40">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, repudiandae! Totam, nemo sed? Provident.</p> <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus</p>
                        </div> <!-- footer about -->
                    </div>--}}{{--

                    <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <a href="#services"><h5 class="title">Services</h5></a>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0)">Business Consultancy</a></li>
                                <li><a href="javascript:void(0)">Exit polls</a></li>
                                <li><a href="javascript:void(0)">Market Analysis</a></li>
                                <li><a href="javascript:void(0)">Surveys</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">About Us</h5>
                            </div>
                            <ul>
                                <li><a href="javascript:void(0)">Overview</a></li>
                                <li><a href="javascript:void(0)">Why us</a></li>
                                <li><a href="javascript:void(0)">Awards & Recognitions</a></li>
                                <li><a href="javascript:void(0)">Team</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                        <div class="footer-contact pt-40">
                            <div class="footer-title">
                                <h5 class="title">Contact Info</h5>
                            </div>
                            <div class="contact pt-10">
                                <p class="text">21 King Street, <br>
                                    Birmingham, 1202 United Kingdom.</p>
                                <p class="text">support@marketresearchpakistan.com</p>
                                <p class="text">+99 000 555 66 22</p>

                                <ul class="social mt-40">
                                    <li><a href="javascript:void(0)"><i class="lni-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- contact -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright text-center">
                <p class="text">© 2022 Powered by <span style="color: blue">WebSoft</span></p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <script src="{{url('Horizontal/dist/assets/libs/jquery-knob/jquery')}}.knob.min.js"></script>

    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Circles js ======-->
    <script src="assets/js/circles.min.js"></script>

    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Headroom js ======-->
    <script src="assets/js/headroom.min.js"></script>

    <!--====== Jquery Nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Scroll It js ======-->
    <script src="assets/js/scrollIt.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script>
        --}}
{{--$(document).ready(function () {--}}{{--

        --}}
{{--    @if($scroll)--}}{{--

        --}}
{{--    $('html, body').animate({--}}{{--

        --}}
{{--        scrollTop: $('#contact').offset().top--}}{{--

        --}}
{{--    }, 'slow');--}}{{--

        --}}
{{--    @endif--}}{{--

        --}}
{{--});--}}{{--


        $('#type').change(function(){
            if($(this).val() == 0)
            {
                $('#first_name').removeClass("d-none");
                $('#last_name').removeClass("d-none");
                $('#contact_name').addClass("d-none");
                $('#company_name').addClass("d-none");
            }
            else if($(this).val() == 1)
            {
                $('#contact_name').removeClass("d-none");
                $('#company_name').removeClass("d-none");
                $('#first_name').addClass("d-none");
                $('#last_name').addClass("d-none");
            }
            // else
            // {
            //     $('#first_name').addClass("d-none");
            // }

        });
    </script>

</body>

</html>
--}}

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>MRP</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png"> --}}
    <link rel="shortcut icon" href="{{url('logo.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<header class="header-area">
    <div class="navbar-area headroom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-2" style="size: 50px;text-align: center">
                    <h3 class="title"><span style="color: #009900">Market Research Pakistan</span></h3>
                    {{--                        <strong style="font-size: 23px;">Market Research Pakistan</strong>--}}
                </div>
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" title="Click to fill the required information"
                           {{--                               href="{{route('register')}}"--}}
                           @guest()
                           href="#contact"
                            @endguest
                        >
                            {{-- <img src="assets/images/logo.png" alt="Logo"> --}}
                            <img src="{{url('logo.png')}}" style="height: 90px;" alt="Logo">
                            <span style="text-transform: uppercase; color:black">Enquire</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav m-auto">
                                <li class="nav-item active">
                                    <a href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">About </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services">Services</a>
                                </li>
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="#portfolio">Portfolio</a>--}}
                                {{--                                    </li>--}}
                                <li class="nav-item">
                                    <a href="#blog">Blog</a>
                                </li>
                                @guest()
                                    <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li>
                                @endguest
                                <li class="nav-item">
                                    <a href="{{route('c_register')}}">Careers</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->

                        <div class="navbar-btn d-none d-sm-inline-block">
                            @guest()
                                <a class="main-btn"  href="{{route('login')}}">Sign In</a>
                            @endguest
                            @auth()
                                <a class="main-btn"  href="{{route('index')}}">My account</a>
                            @endauth
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->

    <!-- Header content removed and placed after about me part -->
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="home" class="about-area pt-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="welcome">WELCOME</h6>
                    <h3 class="title"><span>Our expertise and presence on the ground </span> take care of your business goal.</h3>
                </div>
            </div>
        </div> <!-- row -->
        {{--<div class="row">
            <div class="col-lg-12">
                <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="assets/images/about.png" alt="about">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->--}}
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-content pt-45">
                    <p class="text wow fadeInUp" style="font-size: 21px;" data-wow-duration="1s" data-wow-delay="0.4s">
                        MRP is a rapidly growing market research company providing its services all over Pakistan. We are proud of our leadership and expertise in connecting national and international businesses with consumers in Pakistan every day.
                        MRP partners with businesses of all sizes – from multi-national organisations to independent researchers – sourcing respondents for research across all sectors and methodologies.
                        Whether you are looking to collect information to help you make key business decisions or a particular group of consumers, we will find the information you need.
                        We have a dedicated team of fieldwork researchers across Pakistan comprising of Account Mangers, Project Managers, Project Coordinators and a network of local agents working across Pakistan to bring first hand information.
                        By partnering with you throughout your research journey and taking ownership of your goals, we provide robust, reliable data and analysis delivered in the most efficient, cost-effective way.
                        As an independent agency, MRP has worked on several diverse projects over the years. But we recognise each one is unique. That’s why our expert team offers an intelligent, tailored approach to every client it works with.
                    </p>

                    <div class="about-counter pt-60">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">350</span></span>
                                        <p class="text">Clients</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-2 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">99</span>%</span>
                                        <p class="text">Satisfaction</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-sm-4">
                                <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="counter-shape">
                                        <span class="shape-1"></span>
                                        <span class="shape-2"></span>
                                    </div>
                                    <div class="counter-content media-body">
                                        <span class="counter-count"><span class="counter">870</span></span>
                                        <p class="text">Projects</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- about counter -->
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== Some of HEADER PART removed from HEADER and placed here under about section ======-->
<section id="about" class="about-area">
    <div class="container">
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <span class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 38px;margin-top: 40px;">
                                Our Coverage Across Pakistan
                                Including <span>AK, GB, and FATA</span>
                            </span>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="margin-top: -34px;">
                                <strong style="font-size: 18px;">PROVINCES / TERRITORIES</strong> <br>
                            <li> <strong style="font-size: 18px;">Major Cities:</strong> </li> <span class="ml-4" style="font-size: 18px;">All cities, municipalities and towns.</span>

                            <li> <strong style="font-size: 18px;">Urban Localities:</strong> </li> <span class="ml-4" style="font-size: 18px;">All the districts as well as all cities, municipalities, towns and cantonments.</span>

                            <li> <strong style="font-size: 18px;">Districts: </strong> </li> <span class="ml-4" style="font-size: 18px;">All the districts or agencies.</span>
                            </p>
                            {{-- <div class="header-singup wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <input type="text" placeholder="username@yourdomain.com">
                                <button class="main-btn">Sign Up</button>
                            </div> --}}
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{url('PakistanMap.png')}}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </div> <!-- container -->
</section>
<!--====== Some of HEADER PART removed from HEADER and placed here under about section ======-->

<!--====== OUR SERVICE PART START ======-->

<section id="services" class="our-services-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-6 col-md-8 col-sm-9">
                <div class="section-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">Our services</h6>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            {{--                                <div class="about-counter pt-60">--}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-counter counter-color-1 mt-30 d-flex wow fadeInUp justify-content-center" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <ul style="list-style-type:disc;text-align: left;">
                                            <h3>Our Regular Services</h3>

                                            <li style="margin-left: 22px;">Survey design</li>
                                            <li style="margin-left: 22px;">Field survey</li>
                                            <li style="margin-left: 22px;">Authentic Data collection</li>
                                            <li style="margin-left: 22px;">Audience access</li>
                                            <li style="margin-left: 22px;">Vox Pops</li>
                                            {{--                                                    <a href="{{route('services', 'regularService')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>--}}
                                            <a href="{{route('services')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-counter counter-color-3 mt-30 d-flex wow fadeInUp justify-content-center" data-wow-duration="1s" data-wow-delay="0.9s">
                                        <ul style="list-style-type:disc;text-align: left">
                                            <h3>On demand Services</h3>

                                            <li style="margin-left: 22px;">Research design</li>
                                            <li style="margin-left: 22px;">Questionnaire design</li>
                                            <li style="margin-left: 22px;">Moderation</li>
                                            <li style="margin-left: 22px;">Charting & Reporting</li>
                                            <li style="margin-left: 22px;">Presentation of findings</li>
                                            {{--                                                    <a href="{{route('services', 'onDemandService')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>--}}
                                            <a href="{{route('services')}}" class="hover" style="margin-left: 22px;color: blue;text-decoration: underline;">more</a>
                                        </ul>
                                    </div> <!-- single counter -->
                                </div>
                            </div> <!-- row -->
                            {{--                                </div> <!-- about counter -->--}}
                        </div>
                    </div> <!-- row -->

                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="our-services-tab pt-30">
                    <ul class="nav justify-content-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">
                                <i class="lni-briefcase"></i> <span>Business <br> Consultancy</span>
                            </a>
                        </li>
                        {{--                            <li class="nav-item">--}}
                        {{--                                <a id="digital-tab" data-toggle="tab" href="#digital" role="tab" aria-controls="digital" aria-selected="false">--}}
                        {{--                                    <i class="lni-bullhorn"></i> <span>Digital <br> Marketing</span>--}}
                        {{--                                </a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="nav-item">--}}
                        {{--                                <a id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="false">--}}
                        {{--                                    <i class="lni-stats-up"></i> <span>Market <br> Analysis</span>--}}
                        {{--                                </a>--}}
                        {{--                            </li>--}}
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50">
                                        <img src="assets/images/our-service-1.jpg" alt="service">
                                    </div> <!-- our services image -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45">
                                        <h3 class="services-title">Best business decisions need best market research data.</h3>
                                        <p class="text">
                                            Your competitive edge demands high-quality data collected and delivered quickly and analysed efficiently.
                                            Through our in-house data collection and analysis experts, audience access, consultants and proprietary technology, we can satisfy all of your market research needs in Pakistan.
                                        </p>

                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-1"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Consultancy<br> Agency Skill.</h4>
                                            </div>
                                        </div>
                                    </div> <!-- our services content -->
                                </div>
                            </div> <!-- row -->
                        </div>

                        <div class="tab-pane fade" id="digital" role="tabpanel" aria-labelledby="digital-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50">
                                        <img src="assets/images/our-service-1.jpg" alt="service">
                                    </div> <!-- our services image -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45">
                                        <h3 class="services-title">Digital Marketing  <span>for Your Business Growth.</span></h3>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec est arcu. Maecenas semper tortor.  <br>  <br> In elementum in risus sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis. </p>

                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-2"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Digital Marketing <br> Skill.</h4>
                                            </div>
                                        </div>
                                    </div> <!-- our services content -->
                                </div>
                            </div> <!-- row -->
                        </div>

                        <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="our-services-image mt-50">
                                        <img src="assets/images/our-service-1.jpg" alt="service">
                                    </div> <!-- our services image -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-services-content mt-45">
                                        <h3 class="services-title">Market Analysis  <span>for Your Business Growth.</span></h3>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec est arcu. Maecenas semper tortor.  <br>  <br> In elementum in risus sed commodo. Phasellus nisi ligula, luctus at tempor vitae, placerat at ante. Cras sed consequat justo. Curabitur laoreet eu est vel convallis. </p>

                                        <div class="our-services-progress d-flex align-items-center mt-55">
                                            <div class="circle" id="circles-3"></div>
                                            <div class="progress-content">
                                                <h4 class="progress-title">Market Analysis <br> Agency Skill.</h4>
                                            </div>
                                        </div>
                                    </div> <!-- our services content -->
                                </div>
                            </div> <!-- row -->
                        </div>
                    </div> <!-- tab content -->
                </div> <!-- our services tab -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== OUR SERVICE PART ENDS ======-->

<!--====== SERVICE PART START ======-->

<section id="service" class="service-area pt-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="section-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">Why Us</h6>
                    <h4 class="title">The reasons to choose us <span>as your business partner</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="service-wrapper mt-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-service d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-1.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Highly Experienced</h4>
                            <p class="text">We provide a full spectrum of market and social research services and conduct research in almost any industry across a broad range of methodologies.</p>
                        </div>
                        <div class="shape shape-1">
                            <img src="assets/images/shape/shape-1.svg" alt="shape">
                        </div>
                        <div class="shape shape-2">
                            <img src="assets/images/shape/shape-2.svg" alt="shape">
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-service service-border d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-2.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Bunch of Services</h4>
                            <p class="text">As well as data collection, we also offer a full service package – from research design to report writing. We offer an unparalleled, comprehensive solution to help you understand and improve your customer's experiences.</p>
                        </div>
                        <div class="shape shape-3">
                            <img src="assets/images/shape/shape-3.svg" alt="shape">
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-service d-flex">
                        <div class="service-icon">
                            <img src="assets/images/service-3.png" alt="Icon">
                        </div>
                        <div class="service-content media-body">
                            <h4 class="service-title">Quality Support</h4>
                            <p class="text">Our exclusive enhanced customer experience, extensive geographic coverage across Pakistan and versatile omnichannel capabilities, when coupled with our market- leading reporting and analytics platform, goes beyond any other offering.</p>
                        </div>
                        <div class="shape shape-4">
                            <img src="assets/images/shape/shape-4.svg" alt="shape">
                        </div>
                        <div class="shape shape-5">
                            <img src="assets/images/shape/shape-5.svg" alt="shape">
                        </div>
                    </div> <!-- single service -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-btn text-center pt-25 pb-15">
                        {{--                            <a class="main-btn main-btn-2" href="#">All Services</a>--}}
                    </div> <!-- service btn -->
                </div>
            </div> <!-- row -->
        </div> <!-- service wrapper -->
    </div> <!-- container -->
</section>

<!--====== SERVICE PART ENDS ======-->

<!--====== PROJECT GALLERY PART START ======-->

{{--<section id="portfolio" class="project-masonry-area pt-115">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-4">
                <div class="section-title pb-20  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <h6 class="sub-title">Portfolio</h6>
                    <h4 class="title">Portfolio <span>Gallery.</span></h4>
                </div> <!-- section title -->
            </div>
            <div class="col-lg-8">
                <div class="project-menu text-center text-sm-left text-lg-right pb-20">
                    <ul>
                        <li class="active" data-filter="*">See All</li>
                        <li data-filter=".apps">Apps</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".creative">Creative</li>
                        <li data-filter=".laptop">Laptop</li>
                        <li data-filter=".product">Product</li>
                    </ul>
                </div> <!-- project menu -->
            </div>
        </div> <!-- row -->
        <div class="row grid">
            <div class="col-lg-4 col-sm-6 grid-item apps creative laptop">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-1.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-1.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-4 col-sm-6 grid-item branding creative">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-2.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-2.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-4 col-sm-6 grid-item apps branding product">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-3.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-3.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-4 col-sm-6 grid-item laptop product">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-5.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-5.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-4 col-sm-6 grid-item branding creative">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-4.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-4.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
            <div class="col-lg-4 col-sm-6 grid-item apps laptop product">
                <div class="single-gallery gallery-masonry mt-30">
                    <div class="gallery-image">
                        <img src="assets/images/protfolio-6.jpg" alt="protfolio">
                    </div>
                    <div class="gallery-icon">
                        <a class="image-popup" href="assets/images/protfolio-6.jpg">
                            <span></span>
                        </a>
                    </div>
                </div> <!-- single gallery -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-btn mt-60 text-center">
                    <a class="main-btn" href="#">Load More</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>--}}

<!--====== PROJECT GALLERY PART ENDS ======-->

<!--====== PRICING PART START ======-->

{{--<section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-9">
                <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h6 class="sub-title">Pricing Plans</h6>
                    <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="pricing-price">
                        <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">20% Off</span>
                        <h4 class="title">Basic</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="pricing-price">
                        <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">Special</span>
                        <h4 class="title">Standard</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="pricing-price">
                        <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                    </div>
                    <div class="pricing-title mt-20">
                        <span class="btn">New</span>
                        <h4 class="title">Premium</h4>
                    </div>
                    <div class="pricing-list pt-20">
                        <ul>
                            <li>Full Access</li>
                            <li>Unlimited Bandwidth</li>
                            <li>50 gb Space</li>
                            <li>1 Month Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn pt-70">
                        <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                    </div>
                </div> <!-- single pricing -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>--}}

<!--====== PRICING PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area pt-70 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial-left-content mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">What Client Says, About Us</h4>
                    </div> <!-- section title -->
                    <ul class="testimonial-line">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
                </div> <!-- testimonial left content -->
            </div>
            <div class="col-lg-6">
                <div class="testimonial-right-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="quota">
                        <i class="lni-quotation"></i>
                    </div>
                    <div class="testimonial-content-wrapper testimonial-active">
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/author-1.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">John Doe</h5>
                                        <span class="sub-title">CEO, Alphabet</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/author-2.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">John Doe</h5>
                                        <span class="sub-title">CEO, Alphabet</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="assets/images/author-3.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">John Doe</h5>
                                        <span class="sub-title">CEO, Alphabet</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                        <li><i class="lni-star"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial content wrapper -->
                </div> <!-- testimonial right content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== BRAND PART START ======-->

<div id="brand" class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-wrapper pt-70 clearfix">
                    <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="assets/images/brand-1.png" alt="brand">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <img src="assets/images/brand-2.png" alt="brand">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <img src="assets/images/brand-3.png" alt="brand">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/brand-4.png" alt="brand">
                    </div> <!-- single brand -->
                    <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <img src="assets/images/brand-5.png" alt="brand">
                    </div> <!-- single brand -->
                </div> <!-- brand wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== BRAND PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog" class="blog-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="sub-title">Our Blog</h6>
                    <h4 class="title">Letest <span>News.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="assets/images/news-1.jpg" alt="news"></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-1.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Isabela Moreira</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="assets/images/news-2.jpg" alt="news"></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-2.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Elon Musk</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="blog-image">
                        <a href="blog-details.html"><img src="assets/images/news-3.jpg" alt="news"></a>
                    </div>
                    <div class="blog-content">
                        <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                        <div class="blog-author d-flex align-items-center">
                            <div class="author-image">
                                <img src="assets/images/author-3.jpg" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="sub-title">Posted by</h6>
                                <p class="text">Fiona</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section class="contact-area pt-120 pb-120">
    <div class="container">
        {{--<div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 class="sub-title">Our Contact</h6>
                    <h4 class="title">Get In <span>Touch.</span></h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="contact-info-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">hello@uideck.com</p>
                            <p class="text">support@uideck.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="contact-info-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+99 000 1111 555</p>
                            <p class="text">+88 999 5555 444</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
            </div> <!-- row -->
        </div> <!-- contact info -->--}}
        @guest()
            <div id="contact" class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> VERIFY <span>YOUR EMAIL ID.</span></h4>

                        <form id="contact-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="type">Enquiry Type *</label>
                                        <select class="custom-select" name="type" id="type" required>
                                            <option value="" disabled selected>Select</option>
                                            <option {{old('type') == '0' ? 'selected' : ''}} value="0">Individual</option>
                                            <option {{old('type') == '1' ? 'selected' : ''}} value="1">Company</option>
                                        </select>

                                        @error('type')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('type') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="country">Your Country *</label>
                                        @php
                                            $countries = DB::table('countries')->get();
                                        @endphp

                                        <select class="custom-select" name="country" id="country" required>
                                            <option value="" disabled selected>Select</option>
                                            @foreach ($countries as $country)
                                                <option {{old('country') == $country->id ? 'selected' : ''}} value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>

                                        @error('country')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('country') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="company_name">
                                    <div class="contact-form mt-45">
                                        <label for="company_name">Company Name (If any)</label>
                                        <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Enter company name">
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="first_name">
                                    <div class="contact-form mt-45">
                                        <label for="first_name">First Name *</label>
                                        <input class="form-control @error('first_name') parsley-error @enderror" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{old('first_name')}}">

                                        @error('first_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('first_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none" id="last_name">
                                    <div class="contact-form mt-45">
                                        <label for="last_name">Last Name *</label>
                                        <input class="form-control @error('last_name') parsley-error @enderror" type="text" name="last_name" id="last_name" placeholder="Last name" value="{{old('last_name')}}">

                                        @error('last_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('last_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6 d-none " id="contact_name">
                                    <div class="contact-form mt-45">
                                        <label for="contact_name">Contact Name *</label>
                                        <input class="form-control @error('contact_name') parsley-error @enderror" type="text" name="contact_name" id="contact_name" placeholder="Contact person's name" value="{{old('contact_name')}}">

                                        @error('contact_name')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red"><li class="parsley-required">@foreach ($errors->get('contact_name') as $error) <li>{{ $error }}</li> @endforeach</li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>


                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="email">Email *</label>
                                        <input class="form-control @error('email') parsley-error @enderror" type="email" name="email" id="email" placeholder="Enter email ID" value="{{old('email')}}" required>

                                        @error('email')
                                        <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false" style="color: red">
                                            <li class="parsley-required"> @foreach ($errors->get('email') as $error) <li>{{ $error }}</li> @endforeach </li></ul>
                                        @enderror
                                    </div> <!-- contact-form -->
                                </div>

                                <div class=" col-sm-6 col-md-6">
                                    <div class="contact-form mt-45">
                                        <label for="Phone">Phone (optional)</label>
                                        <input class="form-control" type="text" name="phone" id="Phone" placeholder="Enter phone number">
                                    </div> <!-- contact-form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup" name="terms" required>
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="{{route('terms')}}" target="_blank" class="text-blue">Privacy Policy and Terms & Conditions</a></label>
                                        </div>
                                    </div> <!-- contact-form -->
                                </div>

                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Verify</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        @endguest
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
    <div class="container">
        <div class="footer-widget pt-30 pb-70">
            <div class="row">
                {{-- <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                     <div class="footer-about pt-40">
                         <a href="#">
                             <img src="assets/images/logo.png" alt="Logo">
                         </a>
                         <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, repudiandae! Totam, nemo sed? Provident.</p> <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus</p>
                     </div> <!-- footer about -->
                 </div>--}}
                <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                    <div class="footer-link pt-40">
                        <div class="footer-title">
                            <a href="#services"><h5 class="title">Services</h5></a>
                        </div>
                        <ul>
                            <li><a href="javascript:void(0)">Business Consultancy</a></li>
                            <li><a href="javascript:void(0)">Exit polls</a></li>
                            <li><a href="javascript:void(0)">Market Analysis</a></li>
                            <li><a href="javascript:void(0)">Surveys</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                    <div class="footer-link pt-40">
                        <div class="footer-title">
                            <h5 class="title">About Us</h5>
                        </div>
                        <ul>
                            <li><a href="javascript:void(0)">Overview</a></li>
                            <li><a href="javascript:void(0)">Why us</a></li>
                            <li><a href="javascript:void(0)">Awards & Recognitions</a></li>
                            <li><a href="javascript:void(0)">Team</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                    <div class="footer-contact pt-40">
                        <div class="footer-title">
                            <h5 class="title">Contact Info</h5>
                        </div>
                        <div class="contact pt-10">
                            <p class="text">21 King Street, <br>
                                Birmingham, 1202 United Kingdom.</p>
                            <p class="text">support@marketresearchpakistan.com</p>
                            <p class="text">+99 000 555 66 22</p>

                            <ul class="social mt-40">
                                <li><a href="javascript:void(0)"><i class="lni-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- contact -->
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer-copyright text-center">
            <p class="text">© 2022 Powered by <span style="color: blue">WebSoft</span></p>
        </div>
    </div> <!-- container -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<script src="{{url('Horizontal/dist/assets/libs/jquery-knob/jquery')}}.knob.min.js"></script>

<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="assets/js/slick.min.js"></script>

<!--====== Isotope js ======-->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>

<!--====== Counter Up js ======-->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>

<!--====== Circles js ======-->
<script src="assets/js/circles.min.js"></script>

<!--====== Appear js ======-->
<script src="assets/js/jquery.appear.min.js"></script>

<!--====== WOW js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Headroom js ======-->
<script src="assets/js/headroom.min.js"></script>

<!--====== Jquery Nav js ======-->
<script src="assets/js/jquery.nav.js"></script>

<!--====== Scroll It js ======-->
<script src="assets/js/scrollIt.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

<script>
    {{--$(document).ready(function () {--}}
    {{--    @if($scroll)--}}
    {{--    $('html, body').animate({--}}
    {{--        scrollTop: $('#contact').offset().top--}}
    {{--    }, 'slow');--}}
    {{--    @endif--}}
    {{--});--}}

    $('#type').change(function(){
        if($(this).val() == 0)
        {
            $('#first_name').removeClass("d-none");
            $('#last_name').removeClass("d-none");
            $('#contact_name').addClass("d-none");
            $('#company_name').addClass("d-none");
        }
        else if($(this).val() == 1)
        {
            $('#contact_name').removeClass("d-none");
            $('#company_name').removeClass("d-none");
            $('#first_name').addClass("d-none");
            $('#last_name').addClass("d-none");
        }
        // else
        // {
        //     $('#first_name').addClass("d-none");
        // }

    });
</script>

</body>

</html>
