@if(isset($data))
  <?php $selected = $data['parent_id'];?>
  <form action="{!! route('postProduct',$data['id'])!!}" method="post" enctype="multipart/form-data">
@else
  <?php $selected = '0';?>
  <form action="{!! route('addProduct')!!}" method="post" enctype="multipart/form-data">
@endif
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	<div class="form-group">
    <label for="select">Sản phẩm thuộc chuyên mục?</label>    
    	<select class="form-control" name="cate_id">
        <option value="0">Chọn chuyên mục</option>
        @if(isset($cates))        
          <?php Response::showCates($cates,$selected); ?>
        @endif	  	
	</select>     
  </div>
  <div class="form-group">
    <label for="text">Tên Sản Phẩm</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="{{ old('txtName',isset($data) ? $data['name'] : '') }}">
  </div>
  <div class="form-group">
    <label for="comment">Mô tả ngắn</label>
    <textarea class="form-control ckeditor" rows="5" name="txtDescription">{{ old('txtDescription') }}</textarea>
  </div>
  <div class="form-group">
    <label for="text">Nội dung chi tiêt</label>
    <textarea class="form-control ckeditor" rows="5" name="txtContent">{{ old('txtContent') }}</textarea>
  </div>
  <div class="form-group">
    <label for="text">Sản phẩm thuộc loại nào?</label>

    <label class="radio-inline">
      <input type="radio" name="type" checked="true">Image
    </label>
    <label class="radio-inline">
      <input type="radio" name="type">Video
    </label>&nbsp;&nbsp;
    <span class="glyphicon glyphicon-plus btn btn-success" aria-hidden="true" data-toggle="tooltip" title="Thêm mới hình ảnh!" id="addImage"></span>
    <br>
    <div class="radio-inline" id="divImage">
      <input type="file" name="image1" class="clsImage">
    </div>
  </div>
  <div class="form-group">
    <label for="text">Trạng thái sản phẩm?</label>

    <label class="radio-inline">
      <input type="radio" name="status" checked="true">Bản nháp
    </label>
    <label class="radio-inline">
      <input type="radio" name="status">Bản chính
    </label>
  </div>
  <button type="submit" class="btn btn-default">{!! $btnAction !!}</button>
</form>
