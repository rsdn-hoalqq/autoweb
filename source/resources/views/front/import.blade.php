@extends('layouts.front')
@section('title', 'Page Title')
@section('content')
@if(Session::has('message'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert">
				{!! Session::get('message') !!}
			</div>
		</div>
	</div>
@endif
	<form action="{{ route('postImport')}}" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token()!!}">
        <input type="file" name="file">
        <input type="submit" name="submit" />
    </form>
@endsection