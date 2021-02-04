@extends('layouts.master')
@section('content')

    <main>
{{--    <div class="youtube-area video-padding">--}}
{{--        <div class="container">--}}
{{--            <h1 class="bottom-caption">--}}
{{--                <b>PONDOK PESANTREN NURUL HUDA</b>--}}
{{--            </h1>--}}
{{--            <br>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="video-items-active">--}}
{{--                        <div class="video-items text-center">--}}
{{--                            <img style="width:100%" src="{{asset('asset/background.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-top: 100px">--}}
{{--                <div class="col-md-4">--}}
{{--                    <img style="width:100%" src="{{asset('asset/background.jpg')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-md-7">--}}
{{--                    <h3 class="bottom-caption">--}}
{{--                        <b>PONDOK PESANTREN NURUL HUDA</b>--}}
{{--                    </h3>--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row" style="margin-top: 100px">--}}
{{--                <div class="col-md-7">--}}
{{--                    <h3 class="bottom-caption">--}}
{{--                        <b>PONDOK PESANTREN NURUL HUDA</b>--}}
{{--                    </h3>--}}
{{--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <img style="width:100%" src="{{asset('asset/background.jpg')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <img src="..." class="card-img-top" alt="...">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="video-info">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="video-caption">--}}
{{--                            <div class="top-caption">--}}
{{--                                <span class="color1">Politics</span>--}}
{{--                            </div>--}}
{{--                            <div class="bottom-caption">--}}
{{--                                <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="testmonial-nav text-center">--}}
{{--                            <div class="single-video">--}}
{{--                                <iframe  src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div class="video-intro">--}}
{{--                                    <h4>Welcotme To The Best Model Winner Contest</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-video">--}}
{{--                                <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div class="video-intro">--}}
{{--                                    <h4>Welcotme To The Best Model Winner Contest</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-video">--}}
{{--                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div class="video-intro">--}}
{{--                                    <h4>Welcotme To The Best Model Winner Contest</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-video">--}}
{{--                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div class="video-intro">--}}
{{--                                    <h4>Welcotme To The Best Model Winner Contest</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="single-video">--}}
{{--                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                                <div class="video-intro">--}}
{{--                                    <h4>Welcotme To The Best Model Winner Contest</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <img style="width:100%" src="{{asset('asset/background.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="video-caption">
                                <br><br><br><br><br>
                                <div class="bottom-caption">
                                    <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Blog Terbaru</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                @foreach($contents as $c)
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{{asset('storage/content/'.$c->thumbnail)}}" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h4><a href="#">{{$c->title}}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
