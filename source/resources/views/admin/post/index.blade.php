@extends('layouts.admin')

@section('content')
	@include('admin.common.message')
	
	<div class="panel panel-default">
      <div class="panel-heading headings">DANH SÁCH SẢN PHẨM</div>      
      <div class="panel-body">
        @if($posts)
			<table class="table table-striped">
				<thead>
				    <tr>
				      	<th scope="col">STT</th>
				      	<th scope="col">Tên sản phẩm</th>
				      	<th scope="col">Mô tả sản phẩm</th>
				      	<th scope="col">Chuyên mục</th>
				      	<th scope="col">Trạng thái</th>
				      	<th class="text-center">Actions</th>
				    </tr>
				    <?php $stt = 0;?>
				    @foreach($posts as $post)
				    	<?php $stt ++?>
				    	<tr>
				    		<td>{!! $stt !!}</td>
				    		<td>{!! $post['name'] !!}</td>
				    		<td>{!! $post['description'] !!}</td>
				    		<td>
				    			<?php 
				    				$nameCate = DB::table('categories')->select('name')->where('id',$post['cate_id'])->first();
				    			?>
				    			{!! $nameCate->name !!}
				    		</td>
				    		<td>{!! $post['status'] !!}</td>
				    		<td class="text-center">
				    			<a href="{{'view/'.$post['id']}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a>
				    			<a href="{{'edit/'.$post['id']}}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="{{'delete/'.$post['id']}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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