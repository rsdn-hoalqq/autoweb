@extends('layouts.admin')

@section('content')
@include('admin.common.message')
<div class="panel panel-default">
	<div class="panel-heading headings">FORM THÊM MỚI SẢN PHẨM</div>

	@include('admin.common.error')

	<div class="panel-body">
		@include('admin.post.form',['btnAction'=>'Thêm mới','cates'=>$cates])
	</div>
</div>
  

@endsection