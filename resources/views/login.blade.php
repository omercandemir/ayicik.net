
<!DOCTYPE html>
<html lang="{{App::currentLocale()}}">

<head>
    <title>Ayicik.Net Yönetici Paneli</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nile-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elegant_icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
    @if (session('error'))
        <script>
            swal("Giriş Başarısız", "Kullanıcı adı veya şifre hatalı!", "error");
        </script>
    @endif
    <div id="firo-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="login-out box-shadow">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="padding-50px">
                                    <div class="logo-login margin-bottom-35px">
                                        <a href="index.html"><img src="{{asset('assets/img/logo-1.svg')}}" alt="Ayicik.Net Panel"></a>
                                    </div>
                                    <form action="{{route('login.post')}}" method="POST" class="firo-login-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label">Kullanıcı Adı yada Şifre</label>
                                            <input type="email" name="email" class="form-control rounded-0" id="inputEmail3" placeholder="admin@ayicik.net">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-form-label">Şifre</label>
                                            <input type="password" name="password" class="form-control rounded-0" id="inputPassword3" placeholder="şifrenizi girin">
                                        </div>
                                        <div class="form-group ">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                      <input class="form-check-input" name="remember" type="checkbox"> Beni Hatırla
                                    </label>
                                            </div>
                                        </div>
                                        <div class="form-group margin-top-30px">
                                            <input type="submit" class="btn btn-primary btn-block rounded-0 background-main-color box-shadow" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{asset('assets/img/login.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('home.index')}}" class="firo-bottom sm firo-demo-back">Anasayfaya Dön ...</a>
    <!-- jquery library  -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
