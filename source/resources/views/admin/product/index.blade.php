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
      <div class="panel-heading headings">DANH SÁCH SẢN PHẨM</div>      
      <div class="panel-body">
        @if($products)
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
				    @foreach($products as $product)
				    	<?php $stt ++?>
				    	<tr>
				    		<td>{!! $stt !!}</td>
				    		<td>{!! $product['name'] !!}</td>
				    		<td>{!! $product['description'] !!}</td>
				    		<td>
				    			<?php 
				    				$nameCate = DB::table('categories')->select('name')->where('id',$product['cate_id'])->first();
				    			?>
				    			{!! $nameCate->name !!}
				    		</td>
				    		<td>{!! $product['status'] !!}</td>
				    		<td class="text-center">
				    			<a href="{{'view/'.$product['id']}}" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a>
				    			<a href="{{'edit/'.$product['id']}}" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="{{'delete/'.$product['id']}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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