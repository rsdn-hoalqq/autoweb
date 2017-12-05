@extends('layouts.front')
@section('title', 'Page Title')
@section('header')
    @include('front.header')
@endsection
@section('sidebar')
    @include('front.sidebar',['btnAction'=>'Thêm mới','cates'=>'param'])
@endsection
@section('content')
	{{-- content for sidebar left --}}
    @include('front.sidebarleft')
    {{-- main content --}}
    <div class="col-sm-10">
    	<?php $images = ['slide1.jpg','slide2.jpg','slide3.jpg'];?>
    	@include('front.slideshow',['images'=>$images])
    	{{-- show product --}}
    	@include('front.product')
    </div>
@endsection