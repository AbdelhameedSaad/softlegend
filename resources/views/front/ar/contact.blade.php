@extends('front.ar.layout')


@section('title')
تواصل معنا - شركة سوفت ليجند أفضل شركة برمجة تطبيقات فى مصر
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/ar/css/contact-us.css">
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
                @include('front.ar.inc.navbar')
            <!-----------------End nav Bar---------->

            <!-----Start breadcrumb Section---------->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{route('front.homepage')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>

        <!------------------------- START Contact Us SECTION------------>

        <section class="container contact-us py-5">
        <h2 class="text-center">تواصل معنا دائما</h2>
            <div class="title-line m-auto"></div>
            <div class="mb-5 rounded">
            <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
            </div>
            <div class="row">

               
            <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="0.8s" data-wow-offset="200">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/contact_icon.png" alt="contact_icon">
                    <h2> اتصل بنا</h2>
                    <h5 class="text-muted">01011761910</h5>
                    <h5 class="text-muted">softlegend.co@gmail.com</h5>
                </div>

                <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="1s" data-wow-offset="200">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/workingHours_icon.png" alt="workingHours_icon">
                    <h2>ساعات العمل</h2>
                    <h5 class="text-muted">من الاحد الي الخميس</h5>
                    <h5 class="text-muted">10 AM to 5 PM</h5>
                </div>

                <div class="col-md-4 text-center mb-5 wow slideInDown" data-wow-duration="1.2s" data-wow-offset="200">
                    <img class="img-fluid" src="{{asset('front')}}/Images/contact-us-page/location_icon.png" alt="location_icon">
                    <h2 class="">عنوان الشركة</h2>
                    <h5 class="text-muted">فيلا 27 ، الحي الرابع ، التجمع الخامس ، القاهرة ، مصر </h5>
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
                     <h3>اترك لنا رسالة</h3>
                @include('front.ar.inc.errors')
                    <div class="row">
                    <div class="col-md-6 text-right">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control text-right" placeholder="أدخل اسمك *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control text-right" placeholder="ادخل الايميل الخاص بك *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control text-right" placeholder="أدخل رقم هاتفك *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="desc" class="form-control text-right" placeholder="أدرج رسالتك هنا للتواصل معك في اقرب وقت *" style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="form-btn">
                        <input type="submit" name="btnSubmit" class="btnContact" value="ارسال رسالة" />
                    </div>
                    </div>

                </form>
            </div>
        </section>

        <!------------------------- End Contact Form SECTION------------>

@endsection