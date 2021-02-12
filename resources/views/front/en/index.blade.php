@extends('front.en.layout')

@section('title')
SoftLegend - We Turn Creative Ideas into Apps
@endsection

@section('content')

        <!------- Start Header------->
        <header class="main-header">
           
            @include('front.en.inc.navbar')
            <!-----Start Banner Section---------->
            <div class="banner">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-6 text-left">
                            <h1>Soft Legend Company for design and marketing solutions</h1>
                            <p>Soft Legend Company is an Egyptian licensed company working in the field of web design and software production</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="banner-btn hvr-push"><a href="{{route('front.contactpage')}}">Conatct Now</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <!---------End Banner Section------->
        </header>

        <!-------------End Header------>


        <!---------Start small About------->
        <section class="container py-5 small-about">
            <div class="title">
                <h2 class="text-center">About Soft Legend</h2>
                <div class="title-line m-auto"></div>
            </div>
            <div class="inside">
                <p class="text-center text-muted">We have been one of the largest web solution companies in Egypt, with more than thousands of solutions and services provided</p>
            </div>
        </section>
        <!--------End small About---------->



        <!---------------Start Services-------->
        <div class="container py-5 services">
            <div class="row">
                <div class="col-md-4 text-center wow rotateInDownLeft" data-wow-duration="1s" data-wow-offset="250">
                    <div class="web-design-development">
                        <a href="Web Design And Development.html">
                            <img src="{{asset('front')}}/Images/web design.jpg" alt="Web Design Image">
                            <h4 class="py-1">Web Design And Development</h4>
                            <p class="text-muted">Designing professional corporate websites that are responsive to mobile and easy to navigate.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="250">
                    <div class="e-marketing">
                        <a href="Digital Marketing Development.html">
                            <img src="{{asset('front')}}/Images/E-Marketing.jpg" alt="E-Marketing Image">
                            <h4 class="py-1">Digital Marketing</h4>
                            <p class="text-muted">The best Digital Marketing services through social media platforms and Google Ads. Soft Legend will take your company to the next level.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center wow rotateInDownRight" data-wow-duration="1s" data-wow-offset="250">
                    <div class="mobile-app-development">
                        <a href="mobile app development.html">
                            <img src="{{asset('front')}}/Images/Mobile App Development.jpg" alt="Mobile App Development Image">
                            <h4 class="py-1">Mobile App Development</h4>
                            <p class="text-muted">Implementing the design and programming of mobile applications with high professionalism.</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-------------------End Services---------------->


        <!-----------Full About Section--------->
        <div class="about py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <img class="img-fluid wow slideInDown" data-wow-duration="1s" data-wow-offset="200" src="{{asset('front')}}/Images/about.png">
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div>
                        <h2 class="about-title my-3"><span class="hightLight">Soft Legend</span> For Web Development and mobile Apps</h2>
                        <p class="text-muted"> <span style="color: #3c33a7;">Soft Legend</span> Company is an Egyptian licensed company working in the field of web design and software production since 2019 and has a distinctive position in the Egyptian market.</p>
                        <p class="text-muted"><span style="color: #3c33a7;">Soft Legend</span> includes a distinguished team that specializes in designing and developing websites that has a long experience in this field for more than 5 years in implementing projects for companies
                            in all fields such as tourism - import and export - supplies - training and consulting centers - schools - government agencies - and others. It is considered an integrated team with experience in multiple fields, and this is
                            the most important thing that distinguishes us.</p>
                            <p class="text-muted">The company also works with the latest design and programming techniques, and the design is responsive to all devices such as mobiles and tablets.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------- End Full About Section--------->


        <!--------Start Advantges Section----------->


        <div class="social-box py-5">
            <div class="container">
                <h1 class="text-center mb-5">Advantages you get from <span class="hightLight">Soft Legend</span></h1>
                <div class="row">
                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1s" data-wow-offset="150">
                        <div class="box">
                            <img class=" img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/experience.png">
                            <div class="box-title">
                                <h5>Experience and previous professional business</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12  text-center wow slideInDown hvr-grow" data-wow-duration="1.3s" data-wow-offset="150">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/web-design.png">
                            <div class="box-title">
                                <h5>Unique design for each project</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.4s" data-wow-offset="150">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/marketing.png">
                            <div class="box-title">
                                <h5>Provide targeted marketing plans</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.4s" data-wow-offset="200">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/contract.png">
                            <div class="box-title">
                                <h5>Contract with us and receive your contract online</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.5s" data-wow-offset="200">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/pay.png">
                            <div class="box-title">
                                <h5>Payment methods inside or outside Egypt</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.6s" data-wow-offset="200">
                        <div class="box">
                            <img class=" img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/support.png">
                            <div class="box-title">
                                <h5>Technical support 24/7</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--------End Advantges Section----------->

@endsection