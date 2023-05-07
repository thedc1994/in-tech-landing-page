@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('title')
    Hệ thống
@stop

@section('css')
    @include('home.css')
@stop


@section('content')
    <section class="section lkg-section-hero section-bg text-white"
             style="background-image: url('https://st.ebomb.edu.vn/tmp/erp-image/2022/06/01/41c8ecc4-5af8-46f9-bab0-da3d1467e597.jpg');">
    </section>
    <section class="mb-5" style="padding-top: 20px;">
        <div class="container">
            <h2 class="fs-5 mb-4">Chọn cơ sở</h2>
            <div class="nav-responsive nav-style-1 nav-style-1-primary justify-content-start">
                <div class="nav-responsive-inner">
                    <ul class="nav nav-pills" id="list-branches">
                        @foreach($home['footer']['branches'] as $branch)
                        <li class="nav-item">
                            <a class="nav-link"
                               aria-current="page" href="javascript:;" aria-controls="home" aria-selected="true"
                               onclick="openBranchContent('branch-content-{{$branch['id']}}', this);"
                            >
                                {{$branch['title']}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>
            @foreach($home['footer']['branches'] as $branch)
                <div id="branch-content-{{$branch['id']}}" class="branch-content" style="display: none;">
                    <div class="row g-3 justify-content-between mb-3">
                        <h2 class="fs-4 col align-self-center mb-0">
                            Lịch khai giảng tại {{$branch['title']}}
                        </h2>
                    </div>
                    <p class="text-muted">
                        {!! $branch['calendar_content'] !!}
                    </p>
                </div>
            @endforeach

            <div class="row g-4 mb-4">
            </div>
        </div>
    </section>
    <div class="advise d-flex pt-5 pb-5 w-100"></div>
    @include('home.register')
@stop

@section('footer')
    @include('home.footer')
@stop

@section('script')
    <script>
        function openBranchContent(branchId, button){
            $('.branch-content').each(function () {
                $(this).hide();
            });
            $('#'+branchId).show();

            $('#list-branches').find('.nav-link').each(function () {
                $(this).removeClass('active');
            });
            $(button).addClass('active');
        }

        $(document).ready(function(){
            $('#list-branches').find('.nav-link').first().trigger('click');
        });
    </script>

@stop
