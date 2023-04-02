
<section class="page-banner section-1">
    <img class="banner-home-page img-fluid w-100"
         src="{{URL::asset($home['section_1']['banner'] ?? '/images/banner-1.jpg')}}" />
</section>
<section>
    <div class="container ages-list">

        <div class="row justify-content-center g-3 g-xl-4">
            @foreach($home['section_1']['cards'] as $card)
            <div class="col-lg-3 col-md-6 col-12">
                <a class="card card-banner" href="{{$card['href']}}">
                    <img class="card-img"
                         src="{{URL::asset($card['image'])}}"
                         alt="" />
                    <div class="card-img-overlay">
                        <h3 class="ages-card-title fs-3 mb-3 c-white">{{$card['name']}}</h3>
                        <span class="ages-card-subtitle c-white">{{$card['text']}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>