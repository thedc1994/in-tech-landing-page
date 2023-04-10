
<section class="section-6">
    <div class="d-flex flex-column align-items-center pt-5 pb-5 student-product">
        <div class="text-center fs-medium c-white">
            {{$home['section_6']['label']}}
        </div>
        <div class="line-bg-green mt-1"></div>
        <div class="title text-center fs-large fw-700 c-white mt-4">
            {{$home['section_6']['title']}}
        </div>
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-12 col-md-6">
                    <a href="{{$home['section_6']['main_product']['href']}}">
                        <img class="w-100"
                             src="{{URL::asset($home['section_6']['main_product']['image'])}}"
                             alt="">
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="fs-small-2 fw-700 c-white">
                        {{$home['section_6']['main_product']['title']}}
                    </div>
                    <div class="fs-small-2 fw-400 c-white mt-4">
                        {{$home['section_6']['main_product']['description']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-7" style="margin-top: 0px">
    <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
        <div class="swiper-container" data-plugin="swiper"
             data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
            <div class="swiper-wrapper">
                @foreach($home['section_6']['products'] as $product)
                <div class="swiper-slide no-mr">
                    <div class="card card-teacher">
                        <a class="thumbnail thumbnail-hover rounded mb-3" href="{{$product['href']}}">
                            <img class="thumbnail-img" style="border-radius: 0px;     min-height: 305px;"
                                 src="{{URL::asset($product['image'])}}"
                                 alt="{{$product['title']}}" />
                        </a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{$product['href']}}">{{$product['title']}}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>