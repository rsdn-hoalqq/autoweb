@if(isset($data))
  <?php $selected = $data['cate_id'];?>
  <form action="{!! route('editProduct',$data['id'])!!}" method="post" enctype="multipart/form-data" id="theMyForm">
@else
  <?php $selected = '0';?>
  <form action="{!! route('postProduct')!!}" method="post" enctype="multipart/form-data" id="theMyForm">
@endif
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
  
  <div class="row">
    <div class="col-sm-8">
      <div class="form-group">
        <label for="select">Sản phẩm thuộc chuyên mục?</label>    
          <select class="form-control" name="cate_id">
            <option value="">Chọn chuyên mục</option>
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
        <label for="text">Giá Bán</label>
        <input type="text" class="form-control" name="txtPrice" placeholder="" value="{{ old('txtName',isset($data) ? $data['price'] : '') }}">
      </div>
      <div class="form-group">
        <label for="comment">Mô tả ngắn</label>
        <textarea class="form-control ckeditor" rows="5" name="txtDescription">{{ old('txtDescription',isset($data) ? $data['description'] : '') }}</textarea>
      </div>
      <div class="form-group">
        <label for="text">Nội dung chi tiêt</label>
        <textarea class="form-control ckeditor" rows="5" name="txtContent">{{ old('txtContent',isset($data) ? $data['content'] : '') }}</textarea>
      </div>      
      <div class="form-group">
        <label for="text">Trạng thái sản phẩm?</label>

        <label class="radio-inline">
          <input type="radio" name="status" checked="true" value="0">Bản nháp
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" value="1">Bản chính
        </label>
      </div>
      <button type="submit" class="btn btn-default">{!! $btnAction !!}</button>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="text">Sản phẩm thuộc loại nào?</label><br>
        <label class="radio-inline">
          <input type="radio" name="type" checked="true" value="0" onClick="chooseType('0')">Image
        </label>
        <label class="radio-inline">
          <input type="radio" name="type" value="1" onClick="chooseType('1')">Video
        </label>&nbsp;&nbsp; 
      </div>
      <div class="form-group" id="grVideo">
        <input type="text" class="form-control" name="path" id="pathId" onchange="getAttrPath('pathId')" placeholder="Path video form youtube!">
        <input type="text" class="form-control" name="nameVideo" id="" placeholder="Name Video">
      </div>
      <div class="form-group">
        @if(isset($images))     
            <div class="row" style="margin-left: 0px;margin-right: 0px;">       
            @foreach($images as $image)
              <div class="col-sm-6 divImages img-thumbnail">
                <div class="titleImage">
                  <img src="{{asset('/public/files/icon/delete.jpg')}}" alt="icon delete" class="img-responsive iconDeletes" data-toggle="tooltip" title="Xóa hình ảnh này!" onclick="deleteImage({!! $image['id']!!})">
                </div>
                <img src="{{asset('/public/files/product/'.$image['path'])}}" alt="{{$image['name']}}" class="img-responsive clsImageAdmin">
              </div>
            @endforeach  
            </div> 
          @endif
        <div class="divImage" id="divImage">
          <input type="file" name="image[]" class="clsImage">
          <input type="text" class="form-control" name="nameImage[]" id="" placeholder="Name Image">
        </div>
        <span class="glyphicon glyphicon-plus btn btn-success" aria-hidden="true" data-toggle="tooltip" title="Thêm mới hình ảnh!" id="addImage"></span>
      </div>
    </div>
  </div>	
</form>
