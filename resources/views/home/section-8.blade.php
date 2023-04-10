<section class="section section-8 mt-5" style="background-color: #F9F9F9">
    <div class="container">
        <h2 class="section-title flex-center-y justify-content-between">
            {{$home['section_8']['label']}}

            <a class="btn btn-primary-dark flex-shrink-0 px-4 ms-3 d-none d-md-flex" 
                href="{{$home['section_8']['href']}}" role="button">Xem toàn bộ</a>
        </h2>
        <div class="swiper swiper-post">
            <div class="swiper-container" data-plugin="swiper"
                 data-options='{"slidesPerView":"auto","spaceBetween":16,"breakpoints":{"768":{"allowTouchMove":false,"slidesPerView":3,"spaceBetween":24},"350":{"allowTouchMove":false,"slidesPerView":1,"spaceBetween":24},"992":{"allowTouchMove":false,"slidesPerView":3,"spaceBetween":24}}}'>
                <div class="swiper-wrapper">
                    @foreach($home['section_8']['events'] as $event)
                    <div class="swiper-slide h-auto d-flex">
                        <article class="card card-post">
                            <a class="thumbnail thumbnail-hover rounded-top" href="{{$event['href']}}">
                                <img class="thumbnail-img"
                                     src="{{URL::asset($event['image'])}}"
                                     alt="{{$event['title']}}" />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-uppercase fs-18px lh-base mb-3">
                                    <a href="{{$event['href']}}">{{$event['title']}}</a>
                                </h5>
                                <p class="card-text text-muted fs-sm">{{$event['description']}}</p>
                                <a class="card-read-more link-primary mt-auto" href="{{$event['href']}}">
                                    Xem chi tiết
                                    <svg class="iconsvg-long-arrow-right ms-2">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#long-arrow-right')}}"></use>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center mt-4 d-md-none">
            <a class="btn btn-primary-dark flex-shrink-0 px-4 ms-3" 
                href="{{$home['section_8']['href']}}" role="button">
                Xem toàn bộ
            </a>
        </div>
    </div>
</section>
