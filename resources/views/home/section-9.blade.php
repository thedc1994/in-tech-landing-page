<section class="section section-9 py-0 section-mb">
    <div class="container">
        <h2 class="section-title text-center mb-5 mt-5">
            {{$home['section_9']['title']}}
        </h2>
        <div class="swiper swiper-brands swiper-pagination-outside">
            <div class="swiper-container" data-plugin="swiper"
                 data-options='{"slidesPerView":3,"spaceBetween":32,"loop":true,"autoplay":{"delay":5000},"breakpoints":{"576":{"slidesPerView":4},"768":{"slidesPerView":5}}}'>
                <div class="swiper-wrapper">
                    @foreach($home['section_9']['partners'] as $partner)
                    <a class="swiper-slide text-center"
                       href="{{$partner['href']}}">
                        <img class="img-fluid"
                             src="{{URL::asset($partner['image'])}}"
                             alt="{{$partner['alt']}}" />
                    </a>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
