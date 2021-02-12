@extends('front.en.layout')

@section('title')
Web Development - SoftLegend
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/en/css/Web Design And Development.css">
@endsection


@section('content')

        <!------- Start Header------->
        <!-----------------Start Shapes------->
        <div class="shapes">
            <div class="cubeshape"></div>
            <div class="cubeshape2"></div>
            <div class="ballshape"></div>

        </div>

        <!-----------------End Shapes------>

        <header class="contact-header d-flex align-items-center justify-content-center">


            <!-----Start NavBbar -->
            @include('front.en.inc.navbar')
            <!-----------------End nav Bar---------->
            <!-----Start breadcrumb Section---------->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                    <li class="breadcrumb-item active" aria-current="page">Web Design And Development</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>




        <!-------------------------Start Web services over view ---------------->
        <div class="web-over-view-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="mb-3 img-fluid" src="{{asset('front')}}/Images/Web Design And Development/MAC screen.png">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="content">
                            <h2 class="mb-5">Web services</h2>
                            <p class="text-muted"><span style="color: #3c33a7;">Soft Legend</span> Company can assist you in designing the website you need, which also suits your company's activity and type of services Or the products that you offer and keep pace with the
                                times.
                            </p>
                            <button class="my-4 rounded-1 text-light py-2"><a href="{{route('front.contactpage')}}">Contract Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Web services over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h2>Corporate websites</h2>
                            <p class="text-muted">Web design is the first step in the success of any company, so we are always keen at <span style="color: #3c33a7;">Soft Legend</span> to conduct the necessary studies for the company, understand the customer’s requirements, and work to highlight and present the
                                strengths in the easiest and best ways by designing an official website that represents the company's interface on the Internet and we provide all means of communication With clients on the site.</p>
                        </div>
                    </div>
                    <div class="col-md-5  wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/build websites.jpg">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-5 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/real estate.png">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h2>Real estate websites</h2>
                            <p class="text-muted">You must create a distinguished real estate site and this requires adequate knowledge of the real estate market that witnesses the highest levels of competition, and this is what we offer you. We offer advanced technical solutions
                                while constantly presenting new ideas to bring your site to the top.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h2>E-commerce stores</h2>
                            <p class="text-muted">In the era of booming e-commerce, some trading methods have changed to keep pace with the existing progress, and we seek to provide many modern ideas to make the design of your e-store commensurate with the needs of the market
                                to be able to easily reach thousands of users.</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/e-commerce.jpg">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-5 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/advertising-illustration.jpg">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h2>Advertising websites</h2>
                            <p class="text-muted">Advertising on the Internet is the first source of profit and then designing an advertisement site or displaying ads with a click is one of the activities that require experience, professionalism and comprehensive knowledge
                                of how to manage ads on the Internet while providing all the potential to ensure its continuation as a permanent source of income.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-----------------------------End Working Process Section---------------->



        <!--------------------Start contact Section------------>
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex align-items-end justify-content-end">
                        <div class="left-img wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                            <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/left_content_image.png">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center ">
                        <div>
                            <h1 class="">Contact us for a free review of your needs</h1>
                            <div class="row ">
                                <div class="col-md-12 d-flex justify-content-center bg">
                                    <button class="btn-contact m-4 py-2 px-4 rounded"><a href="{{route('front.contactpage')}}">Contact</a></button>
                                    <button class="btn-whatsapp m-4 py-2 px-4 rounded"><a href="https://wa.me/01011761910">Whatsapp</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Web Design And Development/right_content_image.png" alt="">
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <!--------------------end contact Section------------>

@endsection