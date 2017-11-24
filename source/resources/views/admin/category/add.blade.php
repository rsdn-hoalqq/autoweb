@extends('layouts.admin')

@section('content')
@if(Session::has('message_flag'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-{!! Session::get('alert') !!}">
				{!! Session::get('message_flag') !!}
			</div>
		</div>
	</div>
@endif
<div class="panel panel-default">
	<div class="panel-heading headings">FORM THÊM MỚI CHUYÊN MỤC</div>
	@include('admin.common.error')
	<div class="panel-body">
		@include('admin.category.form',['btnAction'=>'Thêm mới','cates'=>$cates])
	</div>
</div>
  

@endsection