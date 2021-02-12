@extends('front.en.layout')

@section('title')
About - SoftLegend
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/en/css/about-us.css">
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
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>

        <!-----------Start About Us Section------->

        <section class="about-us py-5">
            <div class="container">
                <h2 class="text-center">About Soft Legend</h2>
                <div class="title-line m-auto"></div>

                <div class="row mt-5">
                    <div class="col-lg-5 d-flex align-items-center wow swing" data-wow-duration="3s" data-wow-offset="200">
                        <img class="img-fluid mb-3" src="{{asset('front')}}/Images/about-us/about-us.jpg" alt="about-us image">
                    </div>
                    <div class="col-lg-7">
                        <p> <span style="color: #612aff;">Soft Legend</span> Company is an Egyptian licensed company working in the field of web design and software production since 2019 and has a distinctive position in the Egyptian market.</p>
                        <p><span style="color: #612aff;">Soft Legend</span> includes a distinguished team that specializes in designing and developing websites that has a long experience in this field for implementing projects for companies
                            in all fields such as tourism - import and export - supplies - training and consulting centers - schools - government agencies - and others. It is considered an integrated team with experience in multiple fields, and this is
                            the most important thing that distinguishes us.</p>
                        <p>The company also works with the latest design and programming techniques, and the design is responsive to all devices such as mobiles, tablets, and tablets. The company also archives websites on the most famous search engines such
                            as Google and Yahoo, analyzes the site and targeted keywords, conducts e-marketing campaigns, submits to search engines, e-mail campaigns and directed phone messages.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-----------End About Us Section------->

        <!-----------Start Team Work Section------->

        <section class="team-work py-5">
            <div class="container">
                <h2 class="text-center">Team Work</h2>
                <div class="title-line m-auto"></div>

                <p class="text-center mt-3 desc"><span style="color: #612aff;">Soft Legend</span>'s team is distinguished in analyzing the needs of the client and skilled in converting his requirements into outputs with high designs and international quality</p>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="0.8s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_01..png" alt="team1 image">
                        <div class="text-center inner">
                            <h4>Abdel Hameed Saad</h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="1s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_02.png" alt="team2 image">
                        <div class="text-center inner">
                            <h4>Mahmoud Nasser</h4>
                            <p>Web Designer</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="1.2s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_03.png" alt="team3 image">
                        <div class="text-center inner">
                            <h4>Ahmed Ashraf</h4>
                            <p>Mobile Application</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="1.4s" data-wow-offset="250">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_04.png" alt="team4 image">
                        <div class="text-center inner">
                            <h4>Tarek Mostafa</h4>
                            <p>UI/UX Desiner</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----------End Team Work Section------->

        <!-----------Start Map Section------->

        <section class="container py-5 map">
            <h2 class="text-center">Always Contact Us</h2>
            <div class="title-line m-auto"></div>
            <div class="mb-5 rounded">
            <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
            </div>
        </section>

        <!-----------End Map Section------->

@endsection