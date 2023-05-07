@extends('layout')

@section('menu')
    @include('home.menu')
@stop

@section('title')
   	Khóa học
@stop

@section('css')
    @include('home.css')
@stop


@section('content')
    @include('home.section-1-banner')
    @include('home.register')
@stop

@section('footer')
    @include('home.footer')
@stop
