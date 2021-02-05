@extends('layouts.master')
@section('content')

<main>
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach($contents as $c)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{asset('storage/content/'.$c->thumbnail)}}" alt="">
                                                    </div>
                                                    <div class="what-cap">
{{--                                                        <span class="color1">Night party</span>--}}
                                                        <h4><a href="{{route('detail',$c->slug)}}">{{$c->title}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('components.front-sidebar')
                </div>
{{--                    <!-- Section Tittle -->--}}
{{--                    <div class="section-tittle mb-40">--}}
{{--                        <h3>Follow Us</h3>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                    <!-- Flow Socail -->--}}
{{--                    <div class="single-follow mb-45">--}}
{{--                        <div class="single-box">--}}
{{--                            <div class="follow-us d-flex align-items-center">--}}
{{--                                <div class="follow-social">--}}
{{--                                    <a href="#"><img src="{{asset('front/img/news/icon-fb.png')}}" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="follow-count">--}}
{{--                                    <span>8,045</span>--}}
{{--                                    <p>Fans</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="follow-us d-flex align-items-center">--}}
{{--                                <div class="follow-social">--}}
{{--                                    <a href="#"><img src="{{asset('front/img/news/icon-tw.png')}}" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="follow-count">--}}
{{--                                    <span>8,045</span>--}}
{{--                                    <p>Fans</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="follow-us d-flex align-items-center">--}}
{{--                                <div class="follow-social">--}}
{{--                                    <a href="#"><img src="{{asset('front/img/news/icon-ins.png')}}" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="follow-count">--}}
{{--                                    <span>8,045</span>--}}
{{--                                    <p>Fans</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="follow-us d-flex align-items-center">--}}
{{--                                <div class="follow-social">--}}
{{--                                    <a href="#"><img src="{{asset('front/img/news/icon-yo.png')}}" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="follow-count">--}}
{{--                                    <span>8,045</span>--}}
{{--                                    <p>Fans</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- New Poster -->--}}
{{--                    <div class="news-poster d-none d-lg-block">--}}
{{--                        <img src="{{asset('front/img/news/news_card.jpg')}}" alt="">--}}
{{--                    </div>--}}
            </div>
        </div>
    </section>
    <!-- Whats New End -->


    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
</main>

@endsection
