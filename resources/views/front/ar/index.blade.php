@extends('front.ar.layout')

@section('title')
شركة سوفت ليجند - نحوّل الأفكار الابداعية إلى تطبيقات
@endsection

@section('content')

        <!------- Start Header------->
        <header class="main-header">
           
            @include('front.ar.inc.navbar')
            <!-----Start Banner Section---------->
            <div class="banner text-right">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-8 text-right">
                            <h1> شركة سوفت ليجند<br/> لحلول التصميم والتسويق</h1>
                            <p>شركة سوفت ليجند هي شركة مصرية مرخصة تعمل في مجال تصميم المواقع <br/> وإنتاج البرمجيات</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="banner-btn hvr-push"><a href="{{route('front.contactpage')}}">اتصل بنا</a></button>
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
                <h2 class="text-center mb-3">عن سوفت ليجند</h2>
                <div class="title-line m-auto"></div>
            </div>
            <div class="inside">
                <p class="text-center">
                    نحن واحدة من أكبر شركات تصميم المواقع وانتاج البرمجيات في مصر ، مع الكثير من آلاف الحلول والخدمات المقدمة</p>
            </div>
        </section>
        <!--------End small About---------->



        <!---------------Start Services-------->
        <div class="container py-5 services">
            <div class="row">
                <div class="col-md-4 text-center wow rotateInDownLeft" data-wow-duration="1s" data-wow-offset="300">
                    <div class="web-design-development">
                        <a href="Web Design And Development.html">
                            <img class="img-fluid" src="{{asset('front')}}/Images/web design.jpg" alt="Web Design Image">
                            <h4 class="py-1">تصميم المواقع</h4>
                            <p class="text-muted"> تصميم مواقع ويب احترافية للشركات تستجيب للهواتف المحمولة ويسهل تصفحها</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="250">
                    <div class="e-marketing">
                        <a href="Digital Marketing Development.html">
                            <img class="img-fluid" src="{{asset('front')}}/Images/E-Marketing.jpg" alt="E-Marketing Image">
                            <h4 class="py-1">تسويق الكتروني</h4>
                            <p class="text-muted">أفضل خدمات التسويق الاكتروني عبر منصات التواصل الاجتماعي وإعلانات جوجل</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center wow rotateInDownRight" data-wow-duration="1s" data-wow-offset="250">
                    <div class="mobile-app-development">
                        <a href="mobile app development.html">
                            <img class="img-fluid" src="{{asset('front')}}/Images/Mobile App Development.jpg" alt="Mobile App Development Image">
                            <h4 class="py-1">تصميم تطبيقات الموبايل</h4>
                            <p class="text-muted"> تنفيذ تصميم وبرمجة تطبيقات الموبايل باحترافية عالية</p>
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
                        <img class="img-fluid" src="{{asset('front')}}/Images/about.png">
                    </div>
                    <div class="col-lg-6 text-right d-flex align-items-center">
                        <div>
                            <h2 class="about-title my-3"><span class="hightLight">سوفت ليجند</span> لتصميم مواقع الويب و التطبيقات الهاتف</h2>
                            <p> شركة سوفت ليجند شركة مصرية مرخصة تعمل فى مجال تصميم المواقع وانتاج البرمجيات منذ عام 2019 وتمتلك مكانة مميزة فى السوق المصري</p>
                            <p>تضم شركة سوفت ليجند فريق عمل مميز متخصص فى تصميم وتطوير مواقع الانترنت له خبرة طويلة فى هذا المجال في تنفيذ مشروعات للشركات فى كافه المجالات مثل السياحة - الاستيراد والتصدير - التوريدات - مراكز التدريب والاستشارات - المدارس
                                - الهيئات الحكومية - وغيرها ولذلك يعتبر فريق عمل متكامل له خبرة فى مجالات متعددة وهذا اهم ما يميزنا</p>
                            <p>كما تعمل الشركة باحدث تقنيات التصميم والبرمجة وايضا يكون التصميم متجاوب مع جميع الاجهزة مثل الموبايل والتابلت والاجهزة اللوحية كما تقوم الشركة بارشفة المواقع على اشهر محركات البحث مثل جوجل وياهو وتحليل الموقع والكلمات الرئيسية
                                المستهدفة وعمل حملات التسويق الالكتروني والتقديم لمحركات البحث وحملات البريد الالكتروني ورسائل الهاتف الموجهة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------- End Full About Section--------->


        <!--------Start Advantges Section----------->


        <div class="social-box py-5">
            <div class="container">
                <h1 class="social-box-title text-center mb-5">مميزات تحصل عليها من <span class="hightLight">سوفت ليجند</span></h1>

                <div class="row">
                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1s" data-wow-offset="150">
                        <div class="box">
                            <img class=" img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/experience.png">
                            <div class="box-title">
                                <h5>خبرة وسابقة اعمال احترافية</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12  text-center wow slideInDown hvr-grow" data-wow-duration="1.3s" data-wow-offset="150">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/web-design.png">
                            <div class="box-title">
                                <h5>تصميم فريد لكل مشروع</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.4s" data-wow-offset="150">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/marketing.png">
                            <div class="box-title">
                                <h5>تقديم خطط تسويقية مستهدفة</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.4s" data-wow-offset="200">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/contract.png">
                            <div class="box-title">
                                <h5> تعاقد معنا واستلم عقدك عبر الإنترنت</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.5s" data-wow-offset="200">
                        <div class="box">
                            <img class="img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/pay.png">
                            <div class="box-title">
                                <h5>طرق الدفع داخل وخارج مصر</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-xs-12 text-center wow slideInDown hvr-grow" data-wow-duration="1.6s" data-wow-offset="200">
                        <div class="box">
                            <img class=" img-fluid p-3 mb-4" src="{{asset('front')}}/Images/Advantges-section-icons/support.png">
                            <div class="box-title">
                                <h5>دعم فني 24/7</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!--------End Advantges Section----------->

@endsection