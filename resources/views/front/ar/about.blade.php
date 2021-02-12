@extends('front.ar.layout')

@section('title')
معلومات عنا - شركة سوفت ليجند أفضل شركة برمجة تطبيقات فى مصر
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/ar/css/about-us.css">
@endsection

@section('content')

        <!-----------------Start Shapes------->
        <div class="shapes">
            <div class="cubeshape"></div>
            <div class="cubeshape2"></div>
            <div class="ballshape"></div>
        </div>
        <!-----------------End Shapes------>

        <!------- Start Header------->

        <header class="contact-header d-flex align-items-center justify-content-center">

            <!-----Start NavBbar -->
                @include('front.ar.inc.navbar')
            <!-----------------End nav Bar---------->

            <!-----Start breadcrumb Section---------->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{route('front.homepage')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">من نحن</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>

        </header>

        <!-------------End Header------>

        <!-----------Start About Us Section------->


        <section class="about-us py-5">
            <div class="container">
                <h2 class="text-center">عن سوفت ليجند</h2>
                <div class="title-line m-auto"></div>
                <div class="row mt-5">
                    <div class="col-lg-5 d-flex align-items-center wow swing" data-wow-duration="3s" data-wow-offset="200">
                        <img class="img-fluid mb-3" src="{{asset('front')}}/Images/about-us/about-us.jpg" alt="about-us image">
                    </div>
                    <div class="col-lg-7 text-right d-flex align-items-center">
                        <div>
                        <p> شركة سوفت ليجند شركة مصرية مرخصة تعمل فى مجال تصميم المواقع وانتاج البرمجيات منذ عام 2019 وتمتلك مكانة مميزة فى السوق المصري</p>
                        <p>تضم شركة سوفت ليجند فريق عمل مميز متخصص فى تصميم وتطوير مواقع الانترنت له خبرة طويلة فى هذا المجال في تنفيذ مشروعات للشركات فى كافه المجالات مثل السياحة - الاستيراد والتصدير - التوريدات - مراكز التدريب والاستشارات - المدارس - الهيئات الحكومية - وغيرها ولذلك يعتبر فريق عمل متكامل له خبرة فى مجالات متعددة وهذا اهم ما يميزنا</p>
                        <p>كما تعمل الشركة باحدث تقنيات التصميم والبرمجة وايضا يكون التصميم متجاوب مع جميع الاجهزة مثل الموبايل والتابلت والاجهزة اللوحية كما تقوم الشركة بارشفة المواقع على اشهر محركات البحث مثل جوجل وياهو وتحليل الموقع والكلمات الرئيسية المستهدفة وعمل حملات التسويق الالكتروني والتقديم لمحركات البحث وحملات البريد الالكتروني ورسائل الهاتف الموجهة</p>
                    </div>
                      </div>
                </div>
            </div>
        </section>
        <!-----------End About Us Section------->

        <!-----------Start Team Work Section------->

       
        <section class="team-work py-5">
            <div class="container">
                <h2 class="text-center">فريق سوفت ليجند</h2>
                <div class="title-line m-auto"></div>
                <p class="text-center mt-3">
                    يتميز فريق العمل في تحليل احتياجات العميل ومهارته في تحويل متطلباته إلى مخرجات بتصاميم عالية وجودة عالمية</p>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="0.8s" data-wow-offset="200">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_01..png" alt="team1 image">
                        <div class="text-center inner">
                            <h4>عبدالحميد سعد</h4>
                            <p>قسم البرمجة</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="0.9s" data-wow-offset="200">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_02.png" alt="team2 image">
                        <div class="text-center inner">
                            <h4>محمود ناصر</h4>
                            <p>قسم البرمجة</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="1s" data-wow-offset="200">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_05.png" alt="team3 image">
                        <div class="text-center inner">
                            <h4>سعد نبيل</h4>
                            <p>قسم البرمجة</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow slideInDown" data-wow-duration="1.1s" data-wow-offset="200">
                        <img class="img-fluid" src="{{asset('front')}}/Images/about-us/team_image_04.png" alt="team4 image">
                        <div class="text-center inner">
                            <h4>أسيل عبدالله</h4>
                            <p>قسم التسويق</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------End Team Work Section------->

        <!-----------Start Map Section------->

        <section class="container py-5 map">
        <h2 class="text-center">تواصل معنا دائما</h2>
            <div class="title-line m-auto"></div>
            <div class="mb-5 rounded">
            <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
            </div>
        </section>

        <!-----------End Map Section------->

@endsection