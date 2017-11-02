@extends('admin')

@section('content')
	<div class="col-lg-12">
		@if(Session::has('message_flag'))
			<div class="alert alert-{!! Session::get('alert') !!}">
				{!! Session::get('message_flag') !!}
			</div>
		@endif
	</div>
	<a href="{{'add'}}" class="btn btn-success">Add Category</a>
	@if($categorys)
		<table class="table table-striped">
			<thead>
			    <tr>
			      	<th scope="col">STT</th>
			      	<th scope="col">Tên chuyên mục</th>
			      	<th scope="col">Kewords</th>
			      	<th>Actions</th>
			    </tr>
			    <?php $stt = 0;?>
			    @foreach($categorys as $category)
			    	<?php $stt ++?>
			    	<tr>
			    		<td>{!! $stt !!}</td>
			    		<td>{!! $category['name'] !!}</td>
			    		<td>{!! $category['keywords'] !!}</td>
			    		<td>
			    			<a href="{{'edit/'.$category['id']}}" class="btn btn-success">Edit</a>
			    			<a href="{{'delete/'.$category['id']}}" class="btn btn-success">delete</a>
			    		</td>
			    	</tr>
			    @endforeach
			</thead>
		</table>
	@endif
@endsection
