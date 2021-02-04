@extends('layouts.master')
@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('storage/content/'.$content->thumbnail)}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{$content->title}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i>
                                        -
                                        @foreach($content->contentTags as $t)
                                            {{$t->tag->tag}} -
                                        @endforeach
                                    </a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> {{$content->comments->count()}} Comments</a></li>
                            </ul>
                            {!! $content->contents !!}
                        </div>
                    </div>
{{--                    <div class="navigation-top">--}}
{{--                        <div class="d-sm-flex justify-content-between text-center">--}}
{{--                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and--}}
{{--                                4--}}
{{--                                people like this</p>--}}
{{--                            <div class="col-sm-4 text-center my-2 my-sm-0">--}}
{{--                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->--}}
{{--                            </div>--}}
{{--                            <ul class="social-icons">--}}
{{--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-behance"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="navigation-area">--}}
{{--                            <div class="row">--}}
{{--                                <div--}}
{{--                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="#">--}}
{{--                                            <img class="img-fluid" src="assets/img/post/preview.png" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow">--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="lnr text-white ti-arrow-left"></span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="detials">--}}
{{--                                        <p>Prev Post</p>--}}
{{--                                        <a href="#">--}}
{{--                                            <h4>Space The Final Frontier</h4>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">--}}
{{--                                    <div class="detials">--}}
{{--                                        <p>Next Post</p>--}}
{{--                                        <a href="#">--}}
{{--                                            <h4>Telescopes 101</h4>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow">--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="lnr text-white ti-arrow-right"></span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="#">--}}
{{--                                            <img class="img-fluid" src="assets/img/post/next.png" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-author">--}}
{{--                        <div class="media align-items-center">--}}
{{--                            <img src="assets/img/blog/author.png" alt="">--}}
{{--                            <div class="media-body">--}}
{{--                                <a href="#">--}}
{{--                                    <h4>Harvard milan</h4>--}}
{{--                                </a>--}}
{{--                                <p>Second divided from form fish beast made. Every of seas all gathered use saying--}}
{{--                                    you're, he--}}
{{--                                    our dominion twon Second divided from</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="comments-area">
                        <h4>Komentar</h4>
                        @foreach($content->comments as $comment)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('front/img/comment/comment_1.png')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{$comment->name}}</a>
                                                </h5>
                                                <p class="date">{{$comment->created_at->format('F d, Y H:m')}}</p>
                                            </div>
                                        </div>
                                        <p class="comment">
                                            {{$comment->comment}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h4>Tulis Komentar</h4>
                        <form class="form-contact comment_form" action="{{route('comment-store', $content->id)}}" method="post" id="commentForm">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                               placeholder="Nama Anda" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Isi Pesan" required></textarea>
                                    </div>
                                </div>
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="email" id="email" type="email"--}}
{{--                                               placeholder="Email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Kata Kunci'
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Cari
                                </button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Blog Terbaru</h3>
                            @foreach($blogs as $b)
                            <div class="media post_item">
                                <img src="{{asset('storage/content/'.$b->thumbnail)}}" alt="post" style="width: 30%">
                                <div class="media-body">
                                    <a href="{{route('detail', $b->slug)}}">
                                        <h3>{{$b->title}}</h3>
                                    </a>
                                    <p>{{$b->created_at}}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag</h4>
                            <ul class="list">
                                @foreach($tags as $t)
                                <li>
                                    <a href="#">{{$t->tag}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
{{--                        <aside class="single_sidebar_widget instagram_feeds">--}}
{{--                            <h4 class="widget_title">Instagram Feeds</h4>--}}
{{--                            <ul class="instagram_row flex-wrap">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}
{{--                        <aside class="single_sidebar_widget newsletter_widget">--}}
{{--                            <h4 class="widget_title">Newsletter</h4>--}}
{{--                            <form action="#">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"--}}
{{--                                           onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>--}}
{{--                                </div>--}}
{{--                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"--}}
{{--                                        type="submit">Subscribe--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </aside>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
@endsection
