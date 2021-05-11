@extends('layouts.master')
@section('title')
    Giriş | Ayicik.Net
@endsection
@section('content')
    
<div id="firo-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="login-out box-shadow">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="padding-50px">
                                <div class="logo-login margin-bottom-35px">
                                    <a href="index.html"><img src="assets/img/logo-1.svg" alt=""></a>
                                </div>
                                <form action="{{route('login.post')}}" method="POST" class="firo-login-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-form-label">E-posta</label>
                                        <input type="email" name="email" class="form-control rounded-0" placeholder="Example@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-form-label">Şifre</label>
                                        <input type="password" name="password" class="form-control rounded-0" placeholder="şifre giriniz">
                                    </div>
                                    <div class="form-group ">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="remember" type="checkbox"> Beni Hatırla
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group margin-top-30px">
                                        <input type="submit" class="btn btn-primary btn-block rounded-0 background-main-color box-shadow" value="Giriş Yap">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="http://placehold.it/600x800" alt="Ayicik.Net Giriş Paneli">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="index.html" class="firo-bottom sm firo-demo-back">Back Home ...</a>
@endsection