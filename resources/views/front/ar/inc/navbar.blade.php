 <!-----Start NavBbar -->
 <nav class="navbar navbar-expand-md navbar-light fixed-top nav-transparent" id="mynav">
                <div class="container">
                    <a class="navbar-brand" href="{{route('front.homepage')}}"><img src="{{asset('front')}}/Images/logo/logo.png" alt="softlegend"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav d-flex flex-wrap"> 
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe fa-sm  fa-chevron-down"></i></a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="lang/ar"><img class="img-fluid mr-3" src="{{asset('front')}}/Images/egypt.png" alt="ar">Arabic</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="lang/en"><img class="img-fluid mr-3" src="{{asset('front')}}/Images/united-kingdom.png" alt="en">English</a>
                                </div>
                            </li>
                 </ul>
                    <ul class="navbar-nav ml-auto d-flex flex-row-reverse flex-wrap">
                        @if(Route::currentRouteName() == 'front.homepage')
                        <li class="nav-item myActive2">
                                <a href="{{route('front.homepage')}}">الرئيسية<span class="sr-only">(current)</span></a>
                            </li>
                            @else
                            <li class="nav-item ">
                                <a href="{{route('front.homepage')}}">الرئيسية<span class="sr-only">(current)</span></a>
                            </li>
                            @endif
                            @if(Route::currentRouteName() == 'front.aboutpage')

                            <li class=" nav-item myActive2">
                                <a href="{{route('front.aboutpage')}}">من نحن</a>
                            </li>
                            @else
                    
                            <li class=" nav-item ">
                                <a href="{{route('front.aboutpage')}}">من نحن</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الخدمات</a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('front.web-developmentpage')}}">تطوير مواقع الويب</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('front.mobile-developmentpage')}}">تطوير تطبيقات الهاتف</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('front.digital-marketingtpage')}}">التسويق الاكتروني</a>
                                </div>
                            </li>
                            @if(Route::currentRouteName() == 'front.contactpage')
                            <li class="nav-item myActive2">  
                            <a href="{{route('front.contactpage')}}">اتصل بنا</a>
                            </li>
                            @else
                            <li class="nav-item ">  
                            <a href="{{route('front.contactpage')}}">اتصل بنا</a>
                            </li>
                            @endif
            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-----------------End nav Bar---------->
