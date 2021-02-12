
        <!------------------------- START fOOTER SECTION------------>
        <footer class="pt-3">
            <div class="footer-subnav d-flex flex-wrap container flex-row-reverse">
                <div class="footer-subnav-links  text-center">
                    <ul class="">
                        <li><a href="{{route('front.contactpage')}}">تواصل معنا</a></li>
                        <li><a href="{{route('front.aboutpage')}}">من نحن</a></li>
                        <li><a href="{{route('front.web-developmentpage')}}">الخدمات</a></li>
                    </ul>
                </div>

                <div class="footer-social-icons flex-fill d-flex  mb-3 justify-content-start">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </div>
             
            </div>

            <div class="footer-divider"></div>
            <div class="container">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-sm-6 col-md-6 col-lg-4 text-right">
                        <img class="img-fluid pt-4 w-75" src="{{asset('front')}}/Images/logo/logo-white.png" alt="logo-white1">
                        <p class="footer-company-desc my-2 text-right">تصميم مواقع ويب احترافية للشركات تستجيب للهواتف المحمولة ويسهل تصفحها</p>
                        <div class="footer-address">: العنوان<br/>فيلا 27 ، الحي الرابع ، التجمع الخامس ، القاهرة ، مصر </div>
                        <div class="footer-phone d-flex justify-content-end">0228752293<i class="fa fa-phone-volume fa-2x" aria-hidden="true"></i></div>
                        <div class="footer-mobile  d-flex justify-content-end">01102158610<i class="fa fa-phone-volume fa-2x" aria-hidden="true"></i></div>
                        <div class="footer-whatsapp  d-flex justify-content-end"><a href="http://wa.me/201102158610">01102158610</a><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></div>
                        <div class="footer-mail  d-flex justify-content-end"><a href="mailto:softlegend.co@gmail.com">softlegend.co@gmail.com</a><i class="fas fa-envelope fa-2x"></i></div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-3 footer-important-links">
                        <div class="footer-services container text-right">
                            <h3>خدماتنا</h3>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.digital-marketingtpage')}}">تسويق الاكتروني</a></span>
                            </div>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.web-developmentpage')}}">مواقع الويب</a></span>
                            </div>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.mobile-developmentpage')}}">تطبيقات الهاتف</a></span>
                            </div>
                            <button class="mb-5"><a href="{{route('front.contactpage')}}">ابدأ الان</a></button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 my-3">
                    <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-rights  d-flex justify-content-center align-items-center flex-wrap mt-2">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> <span style="color: #948cec;">سوفت ليجند</span> - كل الحقوق محفوظة</p>
            </div>

        </footer>
        <!------------------------End Footer Section------------->

        <!-----Jquery CDN--------->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
        <!------Our JavaScript File-->
        <script src="{{asset('front')}}/ar/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        @yield('scripts')
        <script src="{{asset('front')}}/ar/js/js.js"></script>
    </body>

</html>