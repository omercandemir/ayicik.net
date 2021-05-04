
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
                          <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img src="assets/img/logo-3.svg" alt=""></a>
                          <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                       </div>
                       <div class="col-lg-7 col-md-12 position-inherit">
                          <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-light">
                             <li class="has-dropdown">
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
                             <li class="has-dropdown">
                                <a href="#">Paketler</a>
                                <ul class="sub-menu">
                                   <li><a href="#">Web Yazılım</a></li>
                                   <li><a href="#">3d Model</a></li>
                                   <li><a href="#">Grafik / Logo</a></li>
                                </ul>
                             </li>
                          </ul>
                          <div class="d-none d-xl-block pull-right model-link margin-top-15px">
                             <a id="cart-link" class="model-link margin-right-25px text-dark opacity-hover-8" href="#">
                             <span>3</span><i class="fa fa-shopping-cart"></i>
                             </a>
                             <div class="cart-model">
                                <div class="media">
                                   <a href="#">
                                   <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-1.jpg" alt="Generic placeholder image">
                                   </a>
                                   <div class="media-body">
                                      <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                      <h5 class="mt-0"><a href="#">Eyeglasses</a></h5>
                                      <h6 class="mt-0 font-2">1 X 250$</h6>
                                   </div>
                                </div>
                                <div class="media">
                                   <a href="#">
                                   <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-2.jpg" alt="Generic placeholder image">
                                   </a>
                                   <div class="media-body">
                                      <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                      <h5 class="mt-0"><a href="#">Short Jeans</a></h5>
                                      <h6 class="mt-0 font-2">1 X 250$</h6>
                                   </div>
                                </div>
                                <div class="media">
                                   <a href="#">
                                   <img class="d-flex align-self-start mr-3 width-50px" src="assets/img/cart-3.jpg" alt="Generic placeholder image">
                                   </a>
                                   <div class="media-body">
                                      <a href="#" class="close"><i class="fa fa-window-close"></i></a>
                                      <h5 class="mt-0"><a href="#">hand bag</a></h5>
                                      <h6 class="mt-0 font-2">1 X 250$</h6>
                                   </div>
                                </div>
                                <div class="padding-0px">
                                   <div class="cart-total background-main-color padding-lr-30px padding-tb-10px text-white">
                                      <div class="desc">Subtotal:</div>
                                      <div class="price"><strong>$71.00</strong></div>
                                      <div class="clearfix"></div>
                                   </div>
                                   <a href="#" class="btn btn-primary btn-lg btn-block">view cart</a>
                                   <a href="#" class="btn btn-outline-primary btn-lg btn-block">Checkout</a>
                                </div>
                             </div>
                          </div>
                          <div class="d-none d-xl-block search-link pull-right model-link margin-top-15px">
                             <a id="search-header" class="model-link margin-right-0px text-dark opacity-hover-8" href="#search">
                             <i class="fa fa-search"></i>
                             </a>
                          </div>
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
    <div id="search">
        <button type="button" class="close">×</button>
        <form class="clearfix d-block">
            <input type="search" value="" placeholder="Search for . . . ." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>