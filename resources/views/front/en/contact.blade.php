@extends('front.en.layout')


@section('title')
Contact - SoftLegend
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/en/css/contact-us.css">
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
                    <li class="breadcrumb-item "><a href="{{route('front.homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>

        <!------------------------- START Contact Us SECTION------------>

        <section class="container contact-us py-5">
            <h2 class="text-center">Always Contact Us</h2>
            <div class="title-line m-auto"></div>

            <div class="mb-5 rounded">
            <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
            </div>
            <div class="row">

                <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="0.8s" data-wow-offset="250">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/contact_icon.png" alt="contact_icon">
                    <h2> Call Us</h2>
                    <h5 class="text-muted">01011761910</h5>
                    <h5 class="text-muted">softlegend.co@gmail.com</h5>
                </div>

                <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="1s" data-wow-offset="250">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/workingHours_icon.png" alt="workingHours_icon">
                    <h2>Working Hours</h2>
                    <h5 class="text-muted">Sunday to Thursday</h5>
                    <h5 class="text-muted">10 AM to 5 PM</h5>
                </div>

                <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="1.2s" data-wow-offset="250">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/location_icon.png" alt="location_icon">
                    <h2>Company Location</h2>
                    <h5 class="text-muted">Villa:27, 4th District, The 5th Settlement, Cairo , Egypt.</h5>
                </div>

            </div>

        </section>

        <!------------------------- End Contact Us SECTION------------>

        <!------------------------- START Contact Form SECTION------------>


        <section class="contact-color py-5">
            <div class="advantages-top-image"></div>
            <div class="container contact-form">
                <div class="contact-image">
                    <img src="{{asset('front')}}/Images/logo/logo.png" alt="softlegend" />
                </div>
                <form action="{{route('front.contactpage.store')}}" method="post" >
                     @csrf
                <h3>Drop Us a Message</h3>
                @include('front.en.inc.errors')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Your Email *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="desc" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-btn">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                    </div>

                </form>
            </div>
        </section>

        <!------------------------- End Contact Form SECTION------------>

@endsection