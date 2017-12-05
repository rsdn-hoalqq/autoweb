<!DOCTYPE html>
<html lang="en">
<head>
  	<title>@yield('title','Trang Chủ')</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="robots" content="index, follow">
	<meta name="title" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">
	<meta name="description" content="Mo ta trang web" />
	<meta name="keywords" content="株式会社ピーエスシー,PSC,ピーエスシー, tag lien quan" />
	{{-- <meta name="format-detection" content="telephone=no">	 --}}
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/front/mystyle.css')}}"></link>
</head>
<body>
	{{-- inlude header --}}
	@section('header')
    @show
    {{-- sidebar --}}
    @section('sidebar')
    @show
    <div class="container-fluid bg-3">   
	  	<div class="row"><br>
	  	@yield('content')  
	  	</div>
	</div>
	<script src="{{asset('js/front.js')}}"></script>
</body>
</html>