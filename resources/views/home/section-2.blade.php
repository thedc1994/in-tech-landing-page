<section class="section-2">
    <div class="achievement">
        <div class="achievement-title">
            {{$home['section_2']['title']}}
        </div>
        <br>
        <div class="achievement-subtitle">
            {{$home['section_2']['sub_title']}}
        </div>
        <div class="study-note-bg"></div>
        <div class="container">
            <div class="row achievement-item">
                @foreach($home['section_2']['achievements'] as $achievement)
                    <div class="col-md-3 col-sm-12 col-12 text-center achievement-item-box">
                        <div class="title-block-1">{{$achievement['title']}}</div>
                        <img class="mt-4" src="{{URL::asset($achievement['icon'])}}" alt="">
                        <div class="fs-small-2 fw-400 c-white mt-3 content-block-1">
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    {{$achievement['description']}}
                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>