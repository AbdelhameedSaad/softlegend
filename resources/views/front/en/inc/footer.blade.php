        <!------------------------- START fOOTER SECTION------------>
        <footer class="pt-3">
            <div class="footer-subnav d-flex flex-wrap container">
                <div class="footer-subnav-links flex-fill">
                    <ul class="">
                        <li><a href="{{route('front.contactpage')}}">Contact</a></li>
                        <li><a href="{{route('front.aboutpage')}}">About US</a></li>
                        <li><a href="{{route('front.web-developmentpage')}}">Services</a></li>
                    </ul>
                </div>
                <div class="footer-social-icons flex-fill d-flex justify-content-end mb-3">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="footer-divider"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <img class="img-fluid pt-4 w-75" src="{{asset('front')}}/Images/logo/logo-white.png" alt="logo-white1">
                        <p class="footer-company-desc my-2">Designing professional corporate websites that are responsive to mobile and easy to navigate.</p>
                        <div class="footer-address">Address:<br/>Villa:27, 4th District, The 5th Settlement, Cairo , Egypt.</div>
                        <div class="footer-phone d-flex" ><i class="fa fa-phone-volume fa-2x" aria-hidden="true"></i>0228752293</div>
                        <div class="footer-mobile d-flex"><i class="fa fa-phone-volume fa-2x" aria-hidden="true"></i>01102158610</div>
                        <div class="footer-whatsapp d-flex"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>01102158610</div>
                        <div class="footer-mail d-flex"><i class="fas fa-envelope fa-2x"></i><a href="mailto:softlegend.co@gmail.com">softlegend.co@gmail.com</a></div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 footer-important-links">
                        <div class="footer-services container text-cnter">
                            <h3>Our Services</h3>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.digital-marketingtpage')}}">Digital Marketing</a></span>
                            </div>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.web-developmentpage')}}">Web Development</a></span>
                            </div>
                            <div class="row">
                                <span class="col my-2"><a href="{{route('front.mobile-developmentpage')}}">Mobile Development</a></span>
                            </div>
                            <button class="mb-5 hvr-push"><a href="{{route('front.contactpage')}}">Start Now!</a></button>
                        </div>
                    </div>
                     <div class="col-lg-5 col-md-12 col-sm-12 my-3">
                     <iframe class="rounded w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4438.077690859155!2d31.43011522404977!3d29.998647369007482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cbc3d5508cf%3A0xf607abf20329ea92!2zMjcg2LHZgtmFIDjYjCDYp9mI2YQg2KfZhNmC2KfZh9ix2Kkg2KfZhNis2K_Zitiv2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1599322916185!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-rights  d-flex justify-content-center align-items-center flex-wrap mt-2">
                <p>&copy; <script>document.write(new Date().getFullYear());</script> <span style="color: #948cec;">Soft Legend</span> - All Rights Reserved</p>
            </div>

        </footer>
        <!------------------------End Footer Section------------->


        <!-----Jquery CDN--------->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
        <!------Our JavaScript File-->
        <script src="{{asset('front')}}/en/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        @yield('scripts')
        <script src="{{asset('front')}}/en/js/js.js"></script>
    </body>

</html>