<section class="section-5">
    <div class="container">
        <div class="section-nested">
            <div class="text-center fs-medium" style="padding-bottom: 5px;font-size: 22px; color: #858DA8">
                {{$home['section_5']['staff_label']}}
            </div>
            <div class="line-bg-green mt-1 m-auto pad"></div>
            <h2 class="section-title text-center mb-2">{{$home['section_5']['staff_title']}}</h2>
            <p class="text-center mb-4 teacher-subtitle">{{$home['section_5']['staff_description']}}</p>
            <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                <div class="swiper-container" data-plugin="swiper"
                     data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                    <div class="swiper-wrapper">
                        @foreach($home['section_5']['staffs'] as $staff)
                        <div class="swiper-slide">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="{{$staff['href']}}">
                                    <img class="thumbnail-img"
                                         src="{{URL::asset($staff['image'])}}"
                                         alt="{{$staff['name']}}" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">
                                        <a href="{{$staff['href']}}">{{$staff['name']}}</a>
                                    </h5>
                                    <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                        @foreach($staff['info'] as $info)
                                            <li class="list-item" style="text-align: justify;">{{$info}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev btn rounded-circle btn-primary text-white">
                            <svg class="iconsvg-chevron-right rotate-180">
                                <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-next btn rounded-circle btn-primary text-white">
                            <svg class="iconsvg-chevron-right">
                                <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="line-bg-green mt-1 m-auto pad"></div>
        <div class="section-nested">
            <h2 class="section-title text-center mb-2">{{$home['section_5']['teacher_label']}}</h2>
            <p class="text-muted text-center mb-4">{{$home['section_5']['teacher_title']}}</p>
            <div class="swiper swiper-teacher swiper-pagination-outside swiper-buttons-outside">
                <div class="swiper-container" data-plugin="swiper"
                     data-options='{"spaceBetween":16,"slidesPerView":2,"breakpoints":{"768":{"spaceBetween":24,"slidesPerView":3},"350":{"spaceBetween":24,"slidesPerView":1},"992":{"spaceBetween":24,"slidesPerView":4}}}'>
                    <div class="swiper-wrapper">
                        @foreach($home['section_5']['teachers'] as $teacher)
                        <div class="swiper-slide">
                            <div class="card card-teacher">
                                <a class="thumbnail thumbnail-hover rounded mb-3" href="{{$teacher['href']}}">
                                    <img class="thumbnail-img"
                                         src="{{URL::asset($teacher['image'])}}"
                                         alt="{{$teacher['name']}}" />
                                </a>
                                <div class="card-body p-0">
                                    <h5 class="card-title">
                                        <a href="{{$teacher['href']}}">
                                            {{$teacher['name']}}
                                        </a>
                                    </h5>
                                    <ul class="list list-bullets list-gap-1 text-muted mb-0">
                                        @foreach($teacher['info'] as $info)
                                        <li class="list-item">{{$info}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev btn rounded-circle btn-primary text-white">
                            <svg class="iconsvg-chevron-right rotate-180">
                                <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                            </svg>
                        </div>
                        <div class="swiper-button-next btn rounded-circle btn-primary text-white">
                            <svg class="iconsvg-chevron-right">
                                <use xlink:href="{{URL::asset('/images/sprite.svg#chevron-right')}}"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>