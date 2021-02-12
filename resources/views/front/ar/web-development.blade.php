@extends('front.ar.layout')

@section('title')
تصميم وتطوير مواقع الويب - سوفت ليجند
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('front')}}/ar/css/Web Design And Development.css">
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
                    <li class="breadcrumb-item"><a href="{{route('front.homepage')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الخدمات</li>
                    <li class="breadcrumb-item active" aria-current="page">تصميم وتطوير مواقع الويب</li>
                </ol>
            </nav>
            <!-----End breadcrumb Section---------->
            <div class="advantages-bottom-image"></div>


        </header>

        <!-------------End Header------>


        <!-------------------------Start Web services over view ---------------->
        <div class="mobile-over-view-section py-5 ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-6 d-flex align-items-center text-right ">
                        <div class="content ">
                            <h2>خدمات الويب</h2>
                            <p>تحتاج كل شركة لانشاء موقع الكتروني يعبر عن نشاطها التجاري </p>
                            <p> ويساعدها أيضا في التسويق الجيد لمنتجاتها والوصول لعملائها </p>
                            <p> .المستهدفين من خلال موقعها الالكتروني</p>
                                <div class="d-flex justify-content-center">
                                <button class="my-4 text-light py-2 w-50"><a href="{{route('front.contactpage')}}">اتصل بنا</a></button>
                        </div>
                                 </div>
                    </div>
                    <div class="col-md-6 ">
                        <img class="mb-3 img-fluid " src="{{asset('front')}}/Images/Web Design And Development/MAC screen.png ">
                    </div>
                </div>
            </div>
        </div>
        <!-------------------------End Web services over view ---------------->



        <!-----------------------------Start Working Process Section---------------->
        <div class="working-process py-5 ">
            <div class="container ">
                <div class="row py-5 ">
                    <div class="col-md-7 d-flex align-items-center text-right ">
                        <div class="content-row m-auto ">
                            <h2> مواقع الشركات</h2>
                            <p class="text-muted ">تصميم المواقع هي أولى خطوات نجاح أي شركة،لذلك نحرص دائمًا في سوفت ليجند علي عمل الدراسات اللازمة للشركة، وفهم متطلبات العميل،والعمل على إبراز نقاط القوى وتقديميها بأسهل الطرق وبأفضل الأساليب من خلال تصميم موقع رسمى يمثل واجهة الشركة على شبكة الإنترنت ونوفر كل وسائل التواصل مع العملاء على الموقع</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight " data-wow-duration="1s " data-wow-offset="250 ">
                        <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/build websites.jpg ">
                    </div>
                </div>
                <div class="row py-5 ">
                    <div class="col-md-5 wow bounceInLeft " data-wow-duration="1s " data-wow-offset="250 ">
                        <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/real estate.png ">
                    </div>
                    <div class="col-md-7 d-flex align-items-center text-right ">
                        <div class="content-row m-auto ">
                            <h2>المواقع العقارية</h2>
                            <p class="text-muted ">يجب عليك عمل موقع عقارى متميز ويتطلب ذلك المعرفة الكافية بالسوق العقارى الذى يشهد أعلى درجات التنافس، وهذا ما نقدمه لك،نقدم حلولًا فنية متقدمة مع تقديم أفكار جديدة بشكل مستمر لنصل بموقعك إلى القمة</p>
                        </div>
                    </div>
                </div>
                <div class="row py-5 ">
                    <div class="col-md-7 d-flex align-items-center text-right ">
                        <div class="content-row m-auto ">
                            <h2>المتاجر الاكترونية</h2>
                            <p class="text-muted ">في عصر إزدهار التجارة الالكترونية تغيرت بعض أساليب التجارة لتواكب التقدم الموجود،ونحن نسعى إلي تقديم العديد من الأفكار الحديثة لجعل تصميم متجرك الإلكتروني يتناسب مع احتياجات السوق لتسطيع الوصول إلي آلاف المستخدمين بسهولة</p>
                        </div>
                    </div>
                    <div class="col-md-5 wow bounceInRight " data-wow-duration="1s " data-wow-offset="250 ">
                        <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/e-commerce.jpg ">
                    </div>
                </div>
                <div class="row py-5 ">
                    <div class="col-md-5 wow bounceInLeft " data-wow-duration="1s " data-wow-offset="250 ">
                        <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/advertising-illustration.jpg ">
                    </div>
                    <div class="col-md-7 d-flex align-items-center text-right ">
                        <div class="content-row m-auto ">
                            <h2> المواقع الإعلانية</h2>
                            <p class="text-muted ">الإعلان على الإنترنت هى أولى مصادر الربح ومن ثم تصميم موقع إعلانات أو عرض إعلانات بالنقرة هى واحدة من النشاطات التى تحتاج إلى خبرة وأحترافية ومعرفة شاملة عن كيفية إدارة الإعلانات على الإنترنت مع توفير كافة الإمكانية لضمان استمراره كمصدر دائم للدخل</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-----------------------------End Working Process Section---------------->



        <!--------------------Start contact Section------------>
        <section class="contact ">
            <div class="container ">
                <div class="row ">
                    <div class="col-md-3 d-flex align-items-end justify-content-end ">
                        <div class="left-img wow bounceInLeft " data-wow-duration="1s " data-wow-offset="250 ">
                            <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/left_content_image.png ">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center ">
                        <div class=" ">
                            <h1 class=" "> اتصل بنا للحصول على مراجعة مجانية لاحتياجاتك</h1>
                            <div class="row ">
                                <div class="col-md-12 d-flex justify-content-center bg ">
                                    <button class="btn-contact m-4 py-2 px-4 rounded "><a href="{{route('front.contactpage')}}">تواصل معنا</a></button>
                                    <button class="btn-whatsapp m-4 py-2 px-4 rounded "><a href="https://wa.me/201102158610 ">واتس اب</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow bounceInRight " data-wow-duration="1s " data-wow-offset="250 ">
                        <img class="img-fluid " src="{{asset('front')}}/Images/Web Design And Development/right_content_image.png " alt=" ">
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <!--------------------end contact Section------------>

@endsection