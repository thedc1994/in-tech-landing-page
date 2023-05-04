@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('title')
    {{$home['title'] ?? "Dino Tech - Trường học Công nghệ Sáng tạo"}}
@stop

@section('css')
    @include('home.css')
@stop


@section('content')
    @include('home.section-1-banner')
    @include('home.section-2')
    @include('home.section-3')
    @include('home.section-4')
    @include('home.section-5')
    @include('home.section-6')
    @include('home.section-8')
    @include('home.section-9')
    @include('home.register')
@stop

@section('footer')
    @include('home.footer')
@stop
