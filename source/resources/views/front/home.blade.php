@extends('layouts.front')
@section('title', 'Page Title')
@section('header')
    @include('front.header',['cates'=>$cates])
@endsection
@section('sidebar')
    @include('front.sidebar',['cates'=>$cates])
@endsection
@section('content')
	{{-- content for sidebar left --}}
    @include('front.sidebarleft')
    {{-- main content --}}
    <div class="col-sm-10">
    	<?php $images = ['slide1.jpg','slide2.jpg','slide3.jpg'];?>
    	@include('front.slideshow',['images'=>$images])
    	{{-- video block --}}
    	@include('front.videoblock')
    	{{-- show product --}}
    	@include('front.product')    	
    </div>
@endsection