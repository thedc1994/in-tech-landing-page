<footer class="footer" id="footer">
    <div class="footer-main py-5">
        <div class="container">
            <div class="row gy-5 g-md-4 align-items-start lh-lg mb-5">
                <div class="col-md-3">
                    <a class="footer-logo" href="{{$home['footer']['logo_href']}}">
                        <img class="img-fluid" src="{{URL::asset($home['footer']['logo'])}}" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="social" style="margin-top: 10px">
                        <a class="social-item" href="{{$home['footer']['facebook']}}">
                            <img class="img-fluid social-icon" src="{{URL::asset('/images/facebook-circle.svg')}}" alt="" />
                        </a>
                        <a class="social-item" href="{{$home['footer']['youtube']}}">
                            <img class="img-fluid social-icon" src="{{URL::asset('/images/youtube-circle.svg')}}" alt="" />
                        </a>
                        <a class="social-item" href="{{$home['footer']['tiktok']}}">
                            <img class="img-fluid social-icon" src="{{URL::asset('/images/tiktok-circle.svg')}}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="text-center mb-4">
                {{$home['footer']['branch_title']}}
            </h5>
            <div class="accordion accordion-2 accordion-icon-caret mb-4" id="accordion-store">
                <div class="row g-3 g-lg-4">
                    @foreach($home['footer']['branches'] as $branch)
                    <div class="col-lg-4 col-sm-6 d-flex">
                        <div class="card card-store border-0">
                            <div class="card-body p-4">
                                <h5 class="card-title">
                                    {{$branch['title']}}
                                </h5>
                                <ul class="list list-icons list-gap-2 mb-2 pb-1">
                                    <li class="list-item">
                                        <svg class="iconsvg-map-pin list-icon">
                                            <use xlink:href="{{URL::asset('/images/sprite.svg#map-pin')}}">
                                            </use>
                                        </svg>{{$branch['address']}}
                                    </li>
                                    <li class="list-item">
                                        <svg class="iconsvg-phone list-icon">
                                            <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}">
                                            </use>
                                        </svg>
                                        <a class='text-muted'
                                           href='tel:{{$branch["phone"]}}'>{{$branch['phone']}}</a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary-light text-primary mt-auto" 
                                    href="{{$branch['map_href']}}" role="button" target="_blank">Xem bản đồ</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p class="text-center mb-0">
                {{$home['footer']['copyright']}}
            </p>
        </div>
    </div>
</footer>