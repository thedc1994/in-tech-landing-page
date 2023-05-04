@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('title')
    Sản phẩm học viên
@stop

@section('css')
    @include('home.css')
@stop


@section('content')
    <section class="page-banner section-1">
        <img class="banner-home-page img-fluid w-100"
             src="{{URL::asset($home['section_1']['banner'] ?? '/images/banner-1.jpg')}}" />
    </section>
    <div class="swiper swiper-pagination-outside mb-5"
         style="padding-left: 10%; padding-right: 10%; padding-top: 50px; padding-bottom: 50px;">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal" data-plugin="swiper" data-options="{&quot;spaceBetween&quot;:24,&quot;breakpoints&quot;:{&quot;768&quot;:{&quot;slidesPerView&quot;:2}}}">
            <div class="swiper-wrapper" id="swiper-wrapper-7dc6b19bf6144678" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                <?php
                    $index=1;
                ?>
                @foreach($home['section_6']['popular_products'] as $product)
                        <div class="swiper-slide @if($index==1) swiper-slide-active @elseif($index==2) swiper-slide-next @endif"
                             role="group" aria-label="{{$index}} / 6" style="width: 546px; margin-right: 24px;">
                            <article class="card card-post-2">
                                <a class="thumbnail thumbnail-hover mb-3" href="{{$product['href']}}">
                                    <img class="thumbnail-img" src="{{URL::asset($product['image'])}}" alt="{{$product['title']}}" style="height: 300px;">
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">
                                        <a href="{{$product['href']}}">{{$product['title']}}</a>
                                    </h5>
                                    <p class="card-text text-muted">
                                        {!! $product['description'] !!}
                                    </p>

                                </div>
                            </article>
                        </div>
                        <?php
                            $index+=1;
                        ?>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>

    <div class="row" style="padding-left:10%; padding-right:10%;">
        <div class="col-main col-lg-8 mb-5">
            <section class="d-grid">
                <h4 class="flex-center-y justify-content-between mb-4">
                    SẢN PHẨM HỌC VIÊN
                </h4>
                @foreach($home['section_6']['products'] as $product)
                <article class="card card-post-h">
                    <div class="row g-3 gx-md-4">
                        <div class="col-sm-5">
                            <a class="thumbnail thumbnail-hover rounded" href="{{$product['href']}}">
                                <img class="thumbnail-img" src="{{$product['image']}}" alt="{{$product['title']}}">
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{$product['href']}}">{{$product['title']}}</a>
                                </h5>
                                <p class="card-text text-muted mb-2">{{$product['description']}}</p>
                                <a class="card-read-more text-muted mt-auto fs-sm" href="{{$product['href']}}">
                                    Xem chi tiết
                                    <svg class="iconsvg-long-arrow-right ms-2">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#long-arrow-right')}}">
                                        </use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                @endforeach
            </section>
        </div>
        <div class="col-aside col-lg-4 mb-5">
            <aside class="sidebar">
                <section>
                    <h5 class="title-line-h-2 mb-3">
                        <span>Các khóa học</span>
                    </h5>
                    @foreach($home['section_1']['cards'] as $course)
                    <article class="card card-post-2 mb-3">
                        <a class="thumbnail thumbnail-hover mb-3" href="{{$course['href']}}">
                            <img class="thumbnail-img" src="{{$course['image']}}">
                        </a>
                    </article>
                    @endforeach
                </section>
            </aside>
        </div>
    </div>

    @include('home.register')
@stop

@section('footer')
    @include('home.footer')
@stop
