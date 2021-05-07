@extends('layouts.master')
@section('title')
    {{$projectDetail->title}} | Ayicik.Net
@endsection
@section('content')
    <!-- Page Title -->
    <div class="page-title layout-1">
        <div class="container clearfix">
            <h1>{{$projectDetail->title}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('home.index')}}">Anasayfa</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
    <!-- End Page Title -->
    <div class="page-output background-white padding-tb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="img-in margin-bottom-30px">
                        <img class="border-radius-8 box-shadow" src="{{asset($projectDetail->image)}}" width="730" height="490" alt="{{$projectDetail->title}}">
                    </div>
                    <div class="entry-content clearfix">
                        <div class="post-entry">
                            <p>{{$projectDetail->content}}</p>
                        </div>
                    </div>
                    <div class="firo-author-content">
                        <div class="output">
                            <div class="author-img">
                                <img class="box-shadow" src="{{asset('assets/img/teddyBear.png')}}" alt="Ayicik.Net {{$projectDetail->authorDetail->name}}">
                            </div>
                            <div class="content">
                                <h5><a href="#">{{$projectDetail->authorDetail->name}}</a></h5>
                                @if ($projectDetail->authorDetail->about == null)
                                    <p>Henüz bir bilgi girilmemiş.</p>
                                @else
                                    <p>{{$projectDetail->authorDetail->about}}</p>
                                @endif
                                <!--  Social -->
                                <ul class="social-media list-inline margin-0px">
                                    <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                                <!-- // Social -->
                            </div>
                        </div>
                    </div>

                    <div id="comments" class="firo-comments">
                        <h2 class="title-comments">3 Comments</h2>
                        <ol class="comment-list">
                            <li id="comment-1" class="comment even thread-even depth-1">
                                <article id="div-comment-17" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/zoal-1.jpg" width="65" height="65" class="avatar avatar-65 wp-user-avatar wp-user-avatar-65 alignnone photo"> <b class="fn"><a href="#" rel="external nofollow" class="url">Ahmed Basslawy</a></b> <span class="says">says:</span> </div>
                                        <!-- .comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#"><time datetime="2018-05-23T11:35:45+00:00">May 23, 2018 at 11:35 am</time></a>
                                        </div>
                                        <!-- .comment-metadata -->

                                    </footer>
                                    <!-- .comment-meta -->

                                    <div class="comment-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                                    </div>
                                    <!-- .comment-content -->

                                    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                </article>
                                <!-- .comment-body -->
                            </li>
                            <!-- #comment-## -->

                            <li id="comment-2" class="comment even thread-even depth-1">
                                <article id="div-comment-17" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/zoal-2.jpg" width="65" height="65" class="avatar avatar-65 wp-user-avatar wp-user-avatar-65 alignnone photo"> <b class="fn"><a href="#" rel="external nofollow" class="url">Ahmed Basslawy</a></b> <span class="says">says:</span> </div>
                                        <!-- .comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#"><time datetime="2018-05-23T11:35:45+00:00">May 23, 2018 at 11:35 am</time></a>
                                        </div>
                                        <!-- .comment-metadata -->

                                    </footer>
                                    <!-- .comment-meta -->

                                    <div class="comment-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                                    </div>
                                    <!-- .comment-content -->

                                    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                </article>
                                <!-- .comment-body -->
                            </li>
                            <li id="comment-3" class="comment even thread-even depth-1">
                                <article id="div-comment-17" class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/zoal-3.jpg" width="65" height="65" class="avatar avatar-65 wp-user-avatar wp-user-avatar-65 alignnone photo"> <b class="fn"><a href="#" rel="external nofollow" class="url">Ahmed Basslawy</a></b> <span class="says">says:</span> </div>
                                        <!-- .comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#"><time datetime="2018-05-23T11:35:45+00:00">May 23, 2018 at 11:35 am</time></a>
                                        </div>
                                        <!-- .comment-metadata -->

                                    </footer>
                                    <!-- .comment-meta -->

                                    <div class="comment-content">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                                    </div>
                                    <!-- .comment-content -->

                                    <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                </article>
                                <!-- .comment-body -->
                            </li>

                        </ol>
                    </div>

                    <div id="respond" class="comment-respond">
                        <h2 class="title-comments">Leave A Reply
                        </h2>
                        <form action="" method="post" id="commentform" class="comment-form" novalidate="">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                            <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                            <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
                            <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                            <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="1557" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="firo-sidebar" class="firo-sidebar">
                        <!-- Latest Posts -->
                        <div class="nile-widget layout-1 firo_latest_news_widget">
                            <div class="title font-2 text-main-color">Latest Posts</div>

                            @foreach($projects as $project)
                            <div class="post">
                                <div class="post-thum"><a href="#"><img src="{{asset($project->image)}}" alt="{{$project->title}}" height="50px"></a></div>
                                <div class="date"><span class="icon_clock_alt"></span> {{$project->created_at}}</div>
                                <a href="{{route('project.detail', $project->slug)}}" class="title">{{$project->title}}</a>
                            </div>
                            @endforeach
                        </div>
                        <!-- End Latest Posts -->
                        <!-- widget categories -->
                        <div class="nile-widget layout-1 widget_categories">
                            <div class="title font-2 text-main-color">Kategoriler</div>
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="#">{{$category->title}}</a></li>
                                @endforeach 
                            </ul>
                        </div>
                        <!-- End widget categories -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection