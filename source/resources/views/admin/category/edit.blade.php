@extends('layouts.admin')

@section('content')   
	<div class="panel panel-default">
		<div class="panel-heading headings">FORM CHỈNH SỮA CHUYÊN MỤC</div>
		@include('admin.common.error')
		<div class="panel-body">
			@include('admin.category.form',['btnAction'=>'Update','data'=>$data,'cates'=>$cates])
		</div>
	</div>
@endsection