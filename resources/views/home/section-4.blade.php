<section class="section-4">
    <div class="w-100 trainning">
        <div class="w-100 bg-top">
            <img class="w-100" src="{{URL::asset($home['section_4']['banner'])}}" alt="">
        </div>
        <div class="container">
            <div class="text-center fs-medium c-white" style="padding-bottom: 5px;font-size: 22px">{{$home['section_4']['title']}}</div>
            <div class="line-bg-green mt-1 m-auto pad"></div>
            <h4 class="title text-center fs-large fw-700 c-white mt-4">{{$home['section_4']['description']}}</h4>
            <div class="text-center fs-small-2 fw-400 c-white">
                {{$home['section_4']['slogan']}}
            </div>
            <div class="row circle-ilp">
                @foreach($home['section_4']['trainning_items'] as $trainningItem)
                <div class="col-md-4 col-4 col-sm-4 pl-4 trainning-item-div">
                    <div class="trainning-item-content" onclick="hoverItem(this)" id="trainning-item-{{$trainningItem['key']}}">
                        <div class="">{{$trainningItem['key_upper']}}</div>
                        <div class="pad-top-10">{{$trainningItem['label']}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row arrow">
                @foreach($home['section_4']['trainning_items'] as $index => $trainningItem)
                <div class="col-md-4 col-sm-4 col-4 mx-auto text-center arrow-{{strtolower($trainningItem['label'])}}"
                     @if($index != 0)
                         style="visibility:hidden"
                     @endif
                >
                    <img height="50%" class="w-150 m-bot-140" src="{{URL::asset($home['section_4']['image_triangle'])}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
        <div class="w-100 bg-bottom">
            @foreach($home['section_4']['trainning_items'] as $index => $trainningItem)
                <div class="container w-100 bg-white
                    @if($index != 0)
                        hidden importantNone
                    @endif
                    " id="tc-{{strtolower($trainningItem['label'])}}">
                    <div class="item-polygon "></div>
                    <div class="row">
                        <div class="trainning-content ml-4 col-md-8">
                            <div class="inspiration">{{$trainningItem['label']}}</div>
                            <div class="mt-3 trainning-pr pb-4">{!! $trainningItem['description'] !!}</div>
                            <a class="view-more c-red" href="{{$trainningItem['href']}}">Tìm hiểu thêm</a>
                        </div>
                        <div class="message-content col-md-2">{{$trainningItem['note']}}</div>
                    </div>
                </div>
            @endforeach
           </div>
    </div>
</section>
