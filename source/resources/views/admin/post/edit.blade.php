@extends('layouts.admin')

@section('content')   
	<div class="panel panel-default">
		<div class="panel-heading headings">CHỈNH SỮA SẢN PHẨM</div>
		@include('admin.common.error')
		<div class="panel-body">
			@include('admin.post.form',['btnAction'=>'Update','data'=>$data,'cates'=>$cates, 'images'=>$images])
		</div>
	</div>
@endsection