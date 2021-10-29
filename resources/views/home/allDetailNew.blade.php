@extends('home.layout')

@section('title', 'Chi tiết hình ảnh')

@section('css')
<link rel="stylesheet" href="/front-end/style.css">
<link rel="stylesheet" href="/demo.css">
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="/theme.css">
@stop

@section('scripts')
@stop

@section('body')

<!-- header -->
<section class="section-header" id="section-header">
    <div class="navbar-wrapper">
        <div class="container">

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
                <div class="container">
                    <div class="navbar-header">

                        <a class="navbar-brand" href="{{route('home')}}"><img src="/images/logo20.png"></a>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Nav Starts -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li><a href="/">Giới thiệu</a></li>
                            <li><a href="/">Đi mô rứa?</a></li>
                            <li><a href="/">Bài viết mới</a></li>
                            <li><a href="/">Liên hệ</a></li>
                        </ul>
                    </div>
                    <!-- #Nav Ends -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- end -->

<section class="section-image" id="">
    <div id="home">
        <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset("/upload/product/".$allDetailNew[0]->image)}}" alt="banner">
                    <h2 class="title-h2">Chi tiết hình ảnh {{$allDetailNew[0]->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-4 mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="card-columns">

                @foreach($allDetailNew as $value)
                <div class="card card-pin">
                    <img class="card-img" src="{{asset("/upload/product/".$value->image)}}" alt="Card image">
                    <div class="overlay">
                        <div class="more">
                            <a href="{{$value->image}}" title="{{$value->name}}" data-gallery>
                                <i class="fa fa-arrow-circle-o-right"></i>Phóng to</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@include('home.layout.footer')
@endsection