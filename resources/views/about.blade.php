@extends('layouts.master')
@section('title')
    Hakkımızda | Ayicik.Net
@endsection
@section('content')
<div class="page-title layout-1">
    <div class="container clearfix">
        <h1>Hakkımızda</h1>
        <ul class="breadcrumbs">
            <li><a href="{{route('home.index')}}">Anasayfa</a></li>
            <li class="active">Hakkımızda</li>
        </ul>
    </div>
</div>
<!-- End Page Title -->


<!-- Our Services -->
<section class="padding-tb-100px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="firo-title dark text-center">
                    <div class="sub-title">Ayicik.Net</div>
                    <h2 class="title">Hakkımızda</h2>
                    <div class="description">Farklı dallardan öğrenciler, insanlara birşeyler katmaya çalışan topluluk, fikirleri projelendiren bir ekip.</div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($features as $feature)    
                <div class="col-lg-3 col-md-6 sm-mb-35px">
                    <div class="icon-text layout-1">
                        <div class="icon"><img src="assets/icons/icon-1.svg" alt=""></div>
                        <h3><a class="link" href="#">{{$feature->title}}</a></h3>
                        <div class="dis">{{$feature->desc}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Our Services -->


<!-- Welcome to firo -->
<section class="padding-tb-100px section-ba-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="firo-title dark text-left">
                    <div class="sub-title">Ayicik.Net</div>
                    <h2 class="title">Ekibe Dahil Olmak</h2>
                    <div class="description">Sende bu ekibin bir parçası mı olmak istiyorsun?</div>
                </div>
                <div class="icon-text layout-2 margin-bottom-30px clearfix">
                    <div class="icon"><img src="assets/icons/icon-5.svg" alt=""></div>
                    <h3><a class="link" href="#">Madde I</a></h3>
                    <div class="dis">Madde I açıklama.</div>
                </div>
                <div class="icon-text layout-2 margin-bottom-30px clearfix">
                    <div class="icon"><img src="assets/icons/icon-6.svg" alt=""></div>
                    <h3><a class="link" href="#">Madde II</a></h3>
                    <div class="dis">Madde II açıklama</div>
                </div>
                <div class="icon-text layout-2 margin-bottom-30px clearfix">
                    <div class="icon"><img src="assets/icons/icon-7.svg" alt=""></div>
                    <h3><a class="link" href="#">Madde III</a></h3>
                    <div class="dis">Madde III açıklama</div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{asset('assets/img/about-1.jpg')}}" alt="Ayicik.Net">
            </div>
        </div>
    </div>
</section>
<!-- end Welcome to firo  -->

<!-- Our Team -->
<section class="padding-tb-100px">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="firo-title dark text-center">
                    <div class="sub-title">Ekibimiz</div>
                    <h2 class="title">Ekibimiz İle Tanışın</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($team as $user)
                <div class="col-lg-3 col-md-6">
                    <div class="team layout-1 sm-mb-35px">
                        <div class="img-out">
                            <img src="{{asset('assets/img/teddyBear.png')}}" alt="{{$user->name}}">
                        </div>
                        <h2 class="name">{{$user->name}}</h2>
                        <div class="dis">{{$user->job}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Our Team -->
@endsection