@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('title')
    404
@stop

@section('css')
    @include('home.css')
@stop


@section('content')
    <h1 class="achievement-title" style="padding: 100px;">
        KHÔNG TÌM THẤY TRANG NÀY !
    </h1>
@stop

@section('footer')
    @include('home.footer')
@stop
