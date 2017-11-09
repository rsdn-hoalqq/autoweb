@extends('admin.dashboard')

@section('content')
@if(Session::has('message'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-success">
				{!! Session::get('message') !!}
			</div>
		</div>
	</div>
@endif
<div class="panel panel-default">
	<div class="panel-heading headings">CHI TIẾT SẢN PHẨM</div>
	<div class="panel-body" style="height: 300px">
		<div class="row">
			<table class="table">
				<tr>
			        <th style="width: 10%">Tên sản phẩm</th>
			        <th style="width: 10%">Giá bán</th>
			        <th>Mô tả</th>
			        <th style="width: 10%">Trạng thái</th>
			    </tr>
				<tr>
					<td>{!! $product['name'] !!}</td>
					<td>{!! number_format($product['price']) !!}</td>
					<td>{!! $product['description'] !!}</td>
					<td>
						@if($product['status'])
							Bản chính
						@else
							Bản nháp
						@endif
					</td>
				</tr>
			</table>
		</div>		
	</div>
</div>
 <div class="panel panel-default">
	<div class="panel-heading headings">HÌNH ẢNH CỦA SẢN PHẨM</div>
	<div class="panel-body">
		<div class="row" id="album-artwork">
			@foreach($images as $image)
				<div class="col-sm-4 block-images">
					<div class="img-thumbnail item-images">
						<div class="titleImage">
							<form action="{!! route('deleteProduct',$image['id']) !!}" id="{!! 'frmDelete'.$image['id']!!}" method="post">
								<input type="hidden" name="_token" value="{!! csrf_token()!!}">
								<input type="hidden" name="name" value="{!! $image['path']!!}">
								<input type="hidden" name="product_id" value="{!! $product['id']!!}">
									<img src="{{asset('files/icon/delete.jpg')}}" alt="icon delete" class="img-responsive iconDelete" data-toggle="tooltip" title="Xóa hình ảnh này!" onclick="deleteImage({!! $image['id']!!})">
							</form>
						</div>
						<img src="{{asset('files/product/'.$image['path'])}}" alt="" class="img-responsive" style="width: 100%;height: 315px;">
					</div>					
				</div>
		    @endforeach
		</div>
	</div>
</div>

@endsection