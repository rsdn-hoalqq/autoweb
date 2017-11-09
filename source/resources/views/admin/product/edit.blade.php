@extends('admin.dashboard')

@section('content')   
	<div class="panel panel-default">
		<div class="panel-heading headings">CHỈNH SỮA SẢN PHẨM</div>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<div class="panel-body">
			@include('admin.product.form',['btnAction'=>'Update','data'=>$data,'cates'=>$cates, 'images'=>$images])
		</div>
	</div>
@endsection