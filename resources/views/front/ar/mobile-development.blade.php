@extends('front.ar.layout')

@section('title')
تطوير تطبيقات الموبايل - سوفت ليجند
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/ar/css/Web Design And Development.css">
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
                    <li class="breadcrumb-item"><a href="{{route('front.homepage')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الخدمات</li>
                    <li class="breadcrumb-item active" aria-current="page">تطوير تطبيقات الهاتف</li>
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
                    <div class="col-md-5 d-flex align-items-center text-right">
                        <div class="content">

                            <h2> تصميم تطبيقات الموبايل</h2>
                            <p>
                                هي عمليه تهدف في الأساس إلى راحة العميل حيث انه أصبح ٧٠ ٪ من مستخدمي الانترنت
                            </p>
                            <p>
                                يقوموا بالاتصال بالشبكه عن طريق هواتفهم المحموله
                            </p>
                            <p>
                                عن طريق تصميم تطبيقات الاندرويد وايفون في زيادة شهرة العلامه التجاريه لشركتك أو مشروعك
                            </p>
                            <p>
                                برمجة تطبيق أندرويد لشركتك أو أعمالك يمكن أن يزيد عدد العملاء المحتملين والبيع وبالتالي زيادة أرباح شركتك
                            </p>   
                            
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
                
                    <div class="col-md-5 wow fadeInDown" data-wow-duration="1.2s" data-wow-offset="100">
                        <img class="mb-5 img-fluid" src="{{asset('front')}}/Images/Mobile App Development page/انشاء-تطبيقات-جوال-1.png">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="content text-center">
                            <h1>تفخر شركة سوفت ليجند بضم العديد من المهندسين في مجال تصميم تطبيقات الهاتف</h3>
                            <button class="my-4 text-light py-2 w-50"> <a href="{{route('front.contactpage')}}">اتصل بنا الان</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Mobile over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5">
            <div class="container">

                <h1 class="text-center">خطوات العمل</h1>
                <div class="title-line m-auto"></div>


                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto ">
                            <h5>خطوة 1</h5>
                            <h2>دراسة متطلبات المشروع</h2>
                            <p class="text-muted">كل موقع وتطبيق جوال لدينا يتم إنشائة بعناية وجودة فائقة لينالسبك و يناسب عملائك،يتم دراسة كل متطلباتك لنقدم لك أفضل تطبيقات الهاتف المحمول جودة وسلاسه والتي تتطور جنبا إلى جنب مع التقدم التكنولوجي </p>            
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
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>خطوة 2</h5>
                            <h2>التخطيط المستقبلي</h2>
                            <p class="text-muted">نتطلع دائمًا إلى الابتكار والتخطيط المستقبلي لتحقيق طموحاتك وأهدافك من خلال التصميمات الاحترافية التي سبقت عصرنا، و نجعل تطبيقك مواكبًا لما يوجد حوله من تيكنولوجيا </p></div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>الخطوة 3</h5>
                            <h2>تطبيقات احترافية وخالية من العيوب</h2>
                            <p class="text-muted">لذلك نقدم لك تصميم فريد ومميز لجوالك ونجعل التطبيق سهل الإستخدام، نقوم ببرمجة تطبيقات خاليه من العيوب البرمجيه،ونضمن لك الحماية الكامله لنشاطك التجاري </p> </div>
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
                            <h1 class="">اتصل بنا للحصول على مراجعة مجانية لاحتياجاتك</h1>
                            <div class="row ">
                                <div class="col-md-12 d-flex justify-content-center bg">
                                    <button class="btn-contact m-4 py-2 px-4 rounded"><a href="{{route('front.contactpage')}}">اتصل بنا</a></button>
                                    <button class="btn-whatsapp m-4 py-2 px-4 rounded"><a href="https://wa.me/201102158610">واتس اب</a></button>
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