@extends('front.en.layout')

@section('title')
Mobile Development - SoftLegend
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
                    <li class="breadcrumb-item active" aria-current="page">Mobile App Development</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>


        <!----------- Start Clint Over View Section=---------------->
        <div class="overview-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="content">

                            <h2>Mobile Applications</h2>
                            <p class="text-muted">It is a process aimed mainly at customer convenience, as he has become 70% of internet users.</p>
                            <p class="text-muted">Programming an mobile application for your company or business can increase the number of leads and sales and thus increase your company's profits.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img class="mb-5 img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/انشاء-تطبيقات-جوال.png">
                    </div>
                </div>
            </div>
        </div>


        <!----------- End Clint Over View Section=---------------->


        <!-------------------------Start Mobile over view ---------------->
        <div class="mobile-over-view-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInDown" data-wow-duration="1.2s" data-wow-offset="100">
                        <img class="mb-5 img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/انشاء-تطبيقات-جوال-1.png">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                    <div class="content text-center">
                            <h1> <span style="color: #3c33a7;">Soft Legend</span> is proud to include many engineers in the field of designing mobile applications.</h1>
                            <button class="my-4 text-light py-2 px-x  w-50"> <a href="{{route('front.contactpage')}}">Contract Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Mobile over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5">
            <div class="container">
                <h1 class="text-center">Working Process</h1>
                <div class="title-line m-auto"></div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 1</h5>
                            <h2>Study your requirements</h2>
                            <p class="text-muted">Every website and mobile application we have is carefully and quality created to fit and suit your customers, all your requirements are studied to offer you the best quality and smooth mobile applications that develop along
                                with technological advancements.</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/process-img.png">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-5 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/process-img-2.png">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 2</h5>
                            <h2>Future planning</h2>
                            <p class="text-muted">We are always looking forward to innovation and future planning to achieve your ambitions and goals through professional designs that precede our era, and we make your application in line with what technology is around it.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 4</h5>
                            <h2>Powerful application</h2>
                            <p class="text-muted">Therefore, we offer you a unique and distinctive design for your mobile and make the application easy to use, we program applications free from software defects, and we guarantee you complete protection for your business.</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/process-img-3.png">
                    </div>
                </div>
            </div>
        </div>



        <!-----------------------------End Working Process Section---------------->



        <!--------------------Start contact Section------------>
        <section class="contact pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex align-items-end justify-content-end wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <div class="left-img">
                            <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/left_content_image.png">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="">
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
                        <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/right_content_image.png" alt="">
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <!--------------------end contact Section------------>


@endsection