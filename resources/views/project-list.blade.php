@extends('layouts.master')
@section('title')
    Tüm Projeler | Ayicik.Net
@endsection
@section('content')
<div class="page-title layout-1">
    <div class="container clearfix">
        <h1>Tüm Yazılar</h1>
        <ul class="breadcrumbs">
            <li><a href="{{route('home.index')}}">Anasayfa</a></li>
            <li class="active">Blog Listesi</li>
        </ul>
    </div>
</div>
<!-- End Page Title -->

<div class="page-output background-white padding-tb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-lg-6 col-md-6">
                            <div class="firo-blog-entry layout-1 margin-bottom-35px">
                                <div class="img-in">
                                    <img src="{{asset($project->image)}}" alt="{{$project->title}}">
                                    <!--  Social -->
                                    <ul class="social-media">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <!-- // Social -->
                                </div>
                                @if ($project->projectCategory == null)
                                @else
                                    <div class="cats"><a href="#">{{$project->projectCategory->title}}</a></div>
                                @endif
                                <a href="{{route('project.detail', $project->slug)}}" class="title font-2">{{$project->title}}</a>
                                <p>@if (strlen($project->content) > 85) {{substr($project->content, 0, 84)}}.... @else {{$project->content}} @endif</p>
                                <a href="{{route('project.detail', $project->slug)}}" class="read_more">Detaylar</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- pagination -->
                <div class="margin-tb-30px">
                    <ul class="pagination pagination-md pagination-style-1 color">
                        {{$projects->onEachSide(1)->links()}}
                    </ul>
                </div>
                <!-- // pagination -->
            </div>
            <div class="col-lg-4">
                <div id="firo-sidebar" class="firo-sidebar">
                    <div class="nile-widget layout-1 widget_categories">
                        <div class="title font-2 text-main-color">Kategoriler</div>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="#">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection