
<!DOCTYPE html>
<html lang="{{App::currentLocale()}}">

<head>
    <title>Ayıcıklarla Dolu Bir Dünya | Anasayfa</title>
    <meta name="author" content="Ömercan">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CJosefin+Sans:300,400,600,700,700i%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">


    <!-- owl Carousel assets -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- hover anmation -->
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
    <!-- flag icon -->
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colors/color-2.css')}}">
    <!-- Nile Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/nile-slider.css')}}">
    <!-- elegant icon -->
    <link rel="stylesheet" href="{{asset('assets/css/elegant_icon.css')}}">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/rslider/css/settings.css')}}">

</head>

<body class="background-white">
    <header>
        <div class="header-output">
           <div class="header-output">
              <div class="container header-in">
                 <div class="position-relative">
                    <div class="row">
                       <div class="col-lg-3 col-md-12">
                          <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img src="{{asset('assets/img/logo-3.svg')}}" alt="Ayicik.Net Logo"></a>
                          <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                       </div>
                       <div class="col-lg-7 col-md-12 position-inherit">
                          <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-light">
                             <li>
                                <a href="{{route('home.index')}}">Anasayfa</a></li>
                             <li class="has-dropdown">
                                <a href="#">Projeler</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Web Yazılım</a></li>
                                    <li><a href="#">3d Modelleme</a></li>
                                    <li><a href="#">Grafik / Tasarım</a></li>
                                </ul>
                             </li>
                             <li><a href="#">Hakkımızda</a></li>
                             <li class="has-dropdown">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                   <li><a href="#">Yazılım</a></li>
                                   <li><a href="#">3d Modelleme</a></li>
                                   <li><a href="#">Duyurular</a></li>
                                </ul>
                             </li>
                          </ul>
                       </div>
                       <div class="col-lg-2 col-md-12  d-none d-lg-block text-right">
                          <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="top-button box-shadow">
                          İletişim
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </header>
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