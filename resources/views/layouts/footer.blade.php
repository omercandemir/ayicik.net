    <!-- preloader -->
    <div class="nile-preloader">
        <div class="logo">
            <img src="{{asset('assets/img/loading-2.svg')}}" alt="">
        </div>
    </div>
    <!-- end preloader -->
<a href="#" class="go-top box-shadow background-second-color"><span class="arrow_carrot-up"></span></a>
<footer class="layout-light  footer_1_ba">
    <div class="container sm-ptb-35px padding-tb-100px">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="about-us sm-mb-45px wow fadeInUp" data-wow-delay=".2s">
                    <div class="logo-footer margin-bottom-25px">
                        <a href="#"><img src="{{asset('assets/img/logo-2.svg')}}" alt=""></a>
                    </div>
                    <div class="text margin-bottom-35px">
                        {{$settings->desc}}
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6">
                <div class="nile-widget widget_nav_menu sm-mb-45px wow fadeInUp" data-wow-delay=".4s">
                    <h2 class="title">Site Pages</h2>
                    <ul class="footer-menu">
                        <li><a href="#about">Hakkımızda</a></li>
                        <li><a href="#">Ekibe Katıl</a></li>
                        <li><a href="#who">Biz Kimiz</a></li>
                        <li><a href="#">Projeler</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="nile-widget">
                    <div class="margin-bottom-60px wow fadeInUp" data-wow-delay=".6s">
                        <h2 class="title">Konum</h2>
                        <div class="contact-info opacity-9">
                            <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                            <div class="text">
                                <span class="title-in">Konum :</span> <br>
                                <span class="title-in">TR - Türkiye</span>
                            </div>
                        </div>
                    </div>
                    <div class="call_center wow fadeInUp" data-wow-delay=".8s">
                        <h2 class="title">İletişim Adresi</h2>
                        <div class="contact-info opacity-9">
                            <div class="icon  margin-top-5px"><span class="icon_mail"></span></div>
                            <div class="text">
                                <span class="title-in">E-posta :</span><br>
                                <span class="title-in">{{$settings->email}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-lg-block d-none">
                <div class="nile-widget sm-mb-45px wow fadeInUp" data-wow-delay="1.0s">
                    <h2 class="title">Discord</h2>
                    <ul class="images-feed row no-gutters margin-0px padding-0px list-unstyled">
                        <iframe src="https://discord.com/widget?id=839268155506425867&theme=dark" width="350" height="180" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="copy-right">
        <div class="container padding-tb-50px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copy-right-text text-lg-left text-center sm-mb-15px wow fadeInUp" data-wow-delay="1.2s">© 2021 ayicik.net </div>
                </div>
                <div class="col-lg-4">
                    <!--  Social -->
                    <ul class="social-media list-inline text-lg-right text-center margin-0px text-white wow fadeInUp" data-wow-delay="1.4s">
                        <li class="list-inline-item"><a class="facebook" href="{{$settings->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="{{$settings->youtube}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="{{$settings->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="{{$settings->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- // Social -->
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/nile-slider.js')}}"></script>
<script src="{{asset('assets/js/scrolla.jquery.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/rslider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/YouTubePopUp.jquery.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.filterizr.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>