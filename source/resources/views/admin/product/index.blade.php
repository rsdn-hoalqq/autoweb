@extends('admin.dashboard')

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
      <div class="panel-heading headings">QUẢN LÝ MENU HIỂN THỊ</div>      
      <div class="panel-body">
        @if($categorys)
			<table class="table table-striped">
				<thead>
				    <tr>
				      	<th scope="col">STT</th>
				      	<th scope="col">Tên chuyên mục</th>
				      	<th scope="col">Kewords</th>
				      	<th scope="col">OrderBy</th>
				      	<th>Actions</th>
				    </tr>
				    <?php $stt = 0;?>
				    @foreach($categorys as $category)
				    	<?php $stt ++?>
				    	<tr>
				    		<td>{!! $stt !!}</td>
				    		<td>{!! $category['name'] !!}</td>
				    		<td>{!! $category['keywords'] !!}</td>
				    		<td>{!! $category['order_by'] !!}</td>
				    		<td>
				    			<a href="{{'edit/'.$category['id']}}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="{{'delete/'.$category['id']}}" class="btn btn-success" onclick="return confirm('Are you sure you want to delete this item?');"><img src="{{ asset('files/icon/delete.png')}}" alt="delete" width="20"></a>
				    		</td>
				    	</tr>
				    @endforeach
				</thead>
			</table>
		@else
			Chưa có chuyên mục nào!
		@endif
      </div>
    </div>	
@endsection