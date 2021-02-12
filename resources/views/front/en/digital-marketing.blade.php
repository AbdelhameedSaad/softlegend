@extends('front.en.layout')

@section('title')
Digial Marketing - SoftLegend
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
                    <li class="breadcrumb-item active" aria-current="page">Digital Marketing</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>


        <!-------------------------Start Digital Marketing over view ---------------->
        <div class="digial-marketing-over-view-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="mb-5 img-fluid" src="{{asset('front')}}/Images/Digital Marketing/right-content_iamge.png">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="content">
                            <h2 class="mb-5">Marketing through social media</h2>
                            <p class="text-muted">Social media is a great way to help you contact with your customers and market your products and services.</p>
                            <p class="text-muted">Therefore, <span style="color: #3c33a7;">Soft Legend</span> seeks to create and manage websites for marketing your products and services, and to ensure that they reach the largest possible number of customers.</p>
                            <button class="my-4 rounded-1 text-light py-2"><a href="contact.html">Contract Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Digital Marketing over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5">
            <div class="container">
                <h1 class="text-center">Working Process</h1>
                <div class="title-line m-auto"></div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 1</h5>
                            <h2>Brand awareness</h2>
                            <p class="text-muted">Before you convince a customer to buy a product or service, he must first be aware of the brand he will deal with, so the primary goal is to create awareness of your brand because it is the most effective way to make customers
                                remember your product.</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/process-img.png">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-5 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/process-img-2.png">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 2</h5>
                            <h2>Search Engine Optimization</h2>
                            <p class="text-muted">When you want to search for a product or service, the first thing you resort to is searching on Google to make sure of the product, and therefore you must have your own website, and you must also get a good number of visitors.</p>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 3</h5>
                            <h2>Reaching the desired percentage of sales</h2>
                            <p class="text-muted">One of the most important goals in business is to achieve a high percentage of sales to cover costs and expenses, so you must have a clear strategy to follow in order to ultimately reach your goals that you seek to achieve
                                in selling.</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/process-img-3.png">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-5 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/After-sales-service.jpg">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content-row m-auto">
                            <h5>Step 4</h5>
                            <h2>After sales</h2>
                            <p class="text-muted">Your ultimate goal does not stop at selling. You should think about how to maintain your sales and make them increase. It is easy for many to reach the desired sales ratios, but it is difficult to continue achieving those proportions
                                so you should think about how to make your product desirable for the largest Possible time, in addition to creating trust between you and the customer, making him come back to you again.</p>
                        </div>
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
                            <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/left_content_image.png">
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
                        <img class="img-fluid" src="{{asset('front')}}/Images/Digital Marketing/right_content_image.png" alt="">
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <!--------------------end contact Section------------>

@endsection