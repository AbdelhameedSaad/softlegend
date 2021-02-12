@extends('front.ar.layout')

@section('title')
التسويق الإلكتروني - شركة سوفت ليجند أفضل شركة برمجة تطبيقات فى مصر
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
                    <li class="breadcrumb-item active" aria-current="page">التسويق الاكتروني</li>
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
                        <div class="content text-right">
                            <h2 class="mb-5"> التسويق عبر وسائل التواصل الاجتماعي</h2>
                            <p>تعد مواقع التواصل الاجتماعي طريقة رائعة لمساعدتك في الاتصال بعملائك،والتسويق لمنتجاتك وخدماتك.

                                لذلك تسعي تيرا نينجا لإنشاء وإدارة المواقع الخاصة بالتسويق لمنتجاتك وخدماتك،وضمان وصولها لأكبر عددٍ ممكن من العملاء</p>
                           <div class="d-flex justify-content-center">
                                <button class="my-4 text-light py-2 w-50"><a href="{{route('front.contactpage')}}">اتصل بنا</a></button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Digital Marketing over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5">
            <div class="container">
                <h1 class="text-center">خطوات العمل</h1>
                <div class="title-line m-auto"></div>

                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>الخطوة 1</h5>
                            <h2> الوعي بالعلامة التجارية</h2>
                            <p class="text-muted">قبل أن تقنع العميل بشراء منتج أو خدمة ما يجب أولًا أن يكون علي دراية بالعلامة التجارية التي سيتعامل معها، لذلك فإن الهدف الأساسي هو خلق الوعي بالعلامة التجارية الخاصة بك لأنها أكثر الطرق فاعليه لجعل العملاء يتذكرون منتجك</p>
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
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>خطوة 2</h5>
                            <h2>شهرة موقعك لدي محركات البحث</h2>
                            <p class="text-muted"> عندما تريد البحث عن منتج أو خدمة ، فإن أول ما تلجأ إليه هو البحث على جوجل للتأكد من المنتج ، وبالتالي يجب أن يكون لديك موقع الويب الخاص بك ، كما يجب أن تحصل على عدد لا بأس به من الزوار</p>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>خطوة 3</h5>
                            <h2> الوصول إلى النسبة المرغوبة من المبيعات</h2>
                            <p class="text-muted">من أهم الأهداف في مجال الأعمال هو تحقيق نسبة عالية من المبيعات لتغطي التكاليف والنفقات، لذلك يجب أن تمتلك إستراتيجية واضحة للسير عليها لتصل في النهاية إلي أهدافك التي تسعي لتحقيقها في البيع</p>
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
                    <div class="col-md-7 d-flex align-items-center text-right">
                        <div class="content-row m-auto">
                            <h5>خطوة 4</h5>
                            <h2> ما بعد البيع</h2>
                            <p class="text-muted">لا يتوقف الهدف النهائي لك عند البيع يجب عليك أن تفكر في كيفية الحفاظ علي مبيعاتك و أن تجعلها في تزايد فمن السهل علي الكثير الوصول إلي نسب المبيعات المرغوب تحقيقها ولكن من الصعب الإستمرار في تحقيق تلك النسب لذلك يجب عليك التفكير في كيفية جعل منتجك مرغوب فيه لأكبر وقتٍ ممكن بالإضافة إلي خلق ثقه بينك و بين العميل تجعله يعود لك مره أخري</p>
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