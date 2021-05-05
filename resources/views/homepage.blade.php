@extends('layouts.master')
@section('content')
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content margin-top-150px background-main-color">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="{{asset('assets/img/contact-img.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="padding-30px">
                        <h3 class="padding-bottom-15px">Mesaj Gönder</h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>İsim - Soyisim *</label>
                                    <input type="text" class="form-control" id="inputName4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>E-posta *</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telefon</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label>Mesaj *</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">Mesaj Gönder</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Get A Quote  -->

<!-- REVOLUTION SLIDER -->
<div class="pull-top-80px">

    <div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="salma-3" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
        <div id="rev_slider_13_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-15" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('assets/rslider/assets/e38a2-slider_3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-15-layer-1" data-x="['left','left','left','center']" data-hoffset="['30','36','27','1']" data-y="['top','top','top','top']" data-voffset="['256','255','262','169']" data-fontsize="['40','40','40','35']" data-lineheight="['70','70','70','38']" data-fontweight="['300','300','300','600']" data-color="['rgb(68,148,181)','rgb(68,148,181)','rgb(68,148,181)','rgb(56,15,143)']" data-width="['588','588','588','382']" data-height="['141','141','141','none']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1030,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 588px; max-width: 588px; max-width: 141px; max-width: 141px; white-space: normal; font-size: 40px; line-height: 70px; font-weight: 300; color: #4494b5; letter-spacing: 0px;font-family:Josefin Sans;">Açık Kaynak Yazılımlar, Ücretsiz 3d Modeller ve daha fazlası
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" id="slide-15-layer-2" data-x="['left','left','left','center']" data-hoffset="['30','36','28','0']" data-y="['middle','middle','middle','middle']" data-voffset="['21','-6','-9','0']" data-width="['502','502','502','381']" data-height="['82','82','82','none']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1020,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 502px; max-width: 502px; max-width: 82px; max-width: 82px; white-space: normal; font-size: 16px; line-height: 32px; font-weight: 400; color: #666666; letter-spacing: 0px;font-family:Poppins;">Web Yazılım ve 3d Modelleme hakkındaki projelere ulaşmak için projeler butonuna, iletişime geçmek için iletişim butonuna tıklayabilirsiniz.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><div class="tp-caption rev-btn " id="slide-15-layer-3" data-x="['left','left','left','center']" data-hoffset="['30','33','23','-2']" data-y="['top','top','top','top']" data-voffset="['524','528','544','453']" data-width="167" data-height="50" data-whitespace="normal" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":960,"speed":1020,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(56,15,143);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,15]" data-paddingright="[35,35,35,35]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[35,35,35,35]" style="z-index: 7; min-width: 167px; max-width: 167px; max-width: 50px; max-width: 50px; white-space: normal; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;background-color:rgba(68,148,181,0.74);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Projeler</div></a>

                    <!-- LAYER NR. 4 -->
                    <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><div class="tp-caption rev-btn " id="slide-15-layer-4" data-x="['left','left','left','left']" data-hoffset="['220','213','202','634']" data-y="['top','top','top','top']" data-voffset="['525','529','543','514']" data-width="164" data-height="48" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":1600,"speed":920,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(252,91,83);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[15,15,15,15]" data-paddingright="[35,35,35,35]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[35,35,35,35]" style="z-index: 8; min-width: 164px; max-width: 164px; max-width: 48px; max-width: 48px; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;background-color:rgba(255,180,29,0.75);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">İletişim</div></a>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>

</div>
<!-- END REVOLUTION SLIDER -->

<!-- Icons & Text  -->
<div class="sm-pull-top-0px">
    <div class="container">
        <div class="row">
            @foreach ($features as $feature)
                <div class="col-lg-3 col-md-6">
                    <div class="@if ($loop->index == 0) pull-top-190px @elseif ($loop->index == 1) pull-top-160px @elseif ($loop->index == 2) pull-top-130px @elseif ($loop->index == 3) pull-top-100px @elseif ($loop->index == 4) pull-top-90px @elseif ($loop->index == 5) pull-top-60px @elseif ($loop->index == 6) pull-top-30px @endif @if ($loop->index != 7) sm-pull-top-0px @endif icon-text layout-6 wow flipInX" data-wow-delay="0.2s">
                        <div class="icon">
                            <img src="{{asset($feature->icon)}}" alt="{{$feature->title}}">
                        </div>
                        <h3><a href="#" class="link">{{$feature->title}}</a></h3>
                        <div class="icon-hover">
                            <h3><a href="#" class="link">{{$feature->alttitle}}</a></h3>
                            <div class="text">{{$feature->desc}}</div>
                            <a class="more" href="{{$feature->redirect}}">Detaylar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Icons & Text  -->

<section class="padding-tb-50px sm-ptb-35px section-ba-1">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="firo-title dark text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-title text-second-color">Ayıcık.Net</div>
                    <h2 class="title">Biz Kimiz ?</h2>
                    <div class="description">Farklı Dallardan Öğrenciler, İnsanlara Birşeyler Katmaya Çalışan Topluluk, Fikirleri Projelendiren Bir Ekip</div>
                </div>
            </div>
        </div>
        <!-- END Title -->
        <div class="row">
            @foreach ($whos as $who)
                <div class="col-lg-4 col-md-6">
                    <div class="icon-text layout-7 wow zoomIn" data-wow-delay="0.2s">
                        <div class="icon">
                            <img src="{{asset($who->icon)}}" alt="{{$who->title}}">
                        </div>
                        <h3><a href="#" class="link">{{$who->title}}</a></h3>
                        <div class="text">{{$who->desc}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="padding-tb-50px sm-ptb-35px section-ba-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="firo-title dark text-center wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title text-second-color">Bize Destek Olun </div>
                    <h2 class="title">Destek Kategorileri</h2>
                    <div class="description">İsteyenler platformumuzu geliştirmek, daha fazla proje ortaya koymak ve daha fazla kişiye ulaşmamız için bizlere destek olabilir.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="firo-pricing-table layout-3 wow zoomIn" data-wow-delay="0.4s">
                    <div class="table-head">
                        <h3 class="title">Destek I</h3>
                    </div>
                    <div class="img-in"><img src="{{asset('assets/img/pricing-1.jpg')}}" alt=""></div>
                    <div class="price-in">
                        <span class="price text-main-color">5<small style="font-size: 50px">₺</small></span>
                        <div class="time">Aylık</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>- Destekçiler listesinde isminiz gözükür.</li>
                            <li>- Discord sunucusunda destekçi rolü.</li>
                            <li>- Projelere isteğe bağlı olarak katılabilirsiniz.</li>
                        </ul>
                    </div>
                    <a class="bot background-second-color box-shadow" href="#">View Plans !</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="firo-pricing-table layout-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="table-head">
                        <h3 class="title">Destek II</h3>
                    </div>
                    <div class="img-in"><img src="{{asset('assets/img/pricing-2.jpg')}}" alt=""></div>
                    <div class="price-in">
                        <span class="price text-main-color">25<small style="font-size: 50px">₺</small></span>
                        <div class="time">Aylık</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>- Destekçiler listesinde isminiz gözükür.</li>
                            <li>- Discord sunucusunda destekçi rolü.</li>
                            <li>- Projelere isteğe bağlı olarak katılabilirsiniz.</li>
                            <li>- Site üzerinden projelerinizi paylaşabilir, blog yazabilirsiniz.</li>
                            <li>- İsteğe bağlı olarak discord sunucumuzun bir kanalında moderatörlük alabilirsiniz.</li>
                        </ul>
                    </div>
                    <a class="bot background-second-color box-shadow" href="#">View Plans !</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="firo-pricing-table layout-3 wow zoomIn" data-wow-delay="0.8s">
                    <div class="table-head">
                        <h3 class="title">Destek III</h3>
                    </div>
                    <div class="img-in"><img src="{{asset('assets/img/pricing-3.jpg')}}" alt=""></div>
                    <div class="price-in">
                        <span class="price text-main-color">100<small style="font-size: 50px">₺</small></span>
                        <div class="time">Aylık</div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>- Destekçiler listesinde isminiz gözükür.</li>
                            <li>- Discord sunucusunda destekçi rolü.</li>
                            <li>- Projelere isteğe bağlı olarak katılabilirsiniz.</li>
                            <li>- Site üzerinden projelerinizi paylaşabilir, blog yazabilirsiniz.</li>
                            <li>- İsteğe bağlı olarak discord sunucumuzun bir kanalında moderatörlük alabilirsiniz.</li>
                            <li>- Ekip içerisine proje sunabilir, geliştirme aşamasında yer alabilirsiniz.</li>
                            <li>- İsteğe bağlı olarak Ayıcık.net özel subdomain oluşturabilir, kullanabilirsiniz.</li>
                        </ul>
                    </div>
                    <a class="bot background-second-color box-shadow" href="#">View Plans !</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="padding-tb-50px sm-ptb-35px section-ba-1">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="firo-title dark text-center wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title text-second-color">Ayıcık.Net</div>
                    <h2 class="title">Geri Bildirimler ve Yorumlar (Feedback)</h2>
                    <div class="description"><a href="#" style="color: #6b4dac;">Buraya tıklayarak</a> geri bildiriminizi herkese açık bir şekilde gönderebilirsiniz.</div>
                </div>
            </div>
        </div>
        <!-- END Title -->



        <div class="testimonial-carousel owl-carousel owl-theme wow zoomIn" data-wow-delay="0.4s">

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-1.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-2.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-3.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-1.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-2.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->

            <!-- item -->
            <div class="item margin-lr-15px">
                <div class="testimonial-item layout-3">
                    <div class="text-content box-shadow">
                        Salma’s analysts have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward
                        <div class="icon"></div>
                    </div>
                    <div class="img-in">
                        <img src="{{asset('assets/img/zoal-3.jpg')}}" alt="">
                    </div>
                    <h4 class="margin-bottom-0px">Rabie Elkheir</h4>
                    <small>Banda Co.ltd</small>
                </div>
            </div>
            <!-- END item -->
        </div>
    </div>
</section>

<section class="padding-tb-100px sm-ptb-35px section-ba-2">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="firo-title dark text-center wow fadeInUp" data-wow-delay=".2s">
                    <div class="sub-title text-second-color">Ayıcık.Net News</div>
                    <h2 class="title">Ayıcık.Net Son Blog Yazıları</h2>
                </div>
            </div>
        </div>
        <!-- END Title -->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-post layout-1 box-shadow sm-mb-35px wow fadeInUp" data-wow-delay=".4s">
                    <div class="img-out">
                        <img src="{{asset('assets/img/blog-1.jpg')}}" alt="">
                        <div class="icon-type"></div>
                    </div>
                    <div class="post-info">
                        <ul class="meta">
                            <li> <span class="icon_clock_alt"></span> May 22, 2018 </li>
                            <li> <span class="icon_profile"></span><a href="#">admin</a> </li>
                        </ul>
                        <a class="link" href="#">What Business Integration Can Do For Your Business</a>
                        <div class="wassf">First, we will have a meeting and listen to your wishes & needs. What you want to get ....</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-post layout-1 box-shadow sm-mb-35px wow fadeInUp" data-wow-delay=".6s">
                    <div class="img-out"><img src="{{asset('assets/img/blog-2.jpg')}}" alt=""></div>
                    <div class="post-info">
                        <ul class="meta">
                            <li> <span class="icon_clock_alt"></span> May 22, 2018 </li>
                            <li> <span class="icon_profile"></span><a href="#">admin</a> </li>
                        </ul>
                        <a class="link" href="#">What Business Integration Can Do For Your Business</a>
                        <div class="wassf">First, we will have a meeting and listen to your wishes & needs. What you want to get ....</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-post layout-1 box-shadow sm-mb-35px wow fadeInUp" data-wow-delay=".8s">
                    <div class="img-out"><img src="{{asset('assets/img/blog-3.jpg')}}" alt=""></div>
                    <div class="post-info">
                        <ul class="meta">
                            <li> <span class="icon_clock_alt"></span> May 22, 2018 </li>
                            <li> <span class="icon_profile"></span><a href="#">admin</a> </li>
                        </ul>
                        <a class="link" href="#">What Business Integration Can Do For Your Business</a>
                        <div class="wassf">First, we will have a meeting and listen to your wishes & needs. What you want to get ....</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection