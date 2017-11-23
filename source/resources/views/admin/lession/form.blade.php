@if(isset($data))
  <?php $selected = $data['parent_id'];?>
  <form action="{!! route('postEdit',$data['id'])!!}" method="post">
@else
  <?php $selected = '0';?>
  <form action="{!! route('addCategory')!!}" method="post">
@endif
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	<div class="form-group">
    <label for="select">Chọn chuyên mục</label>    
    	<select class="form-control" name="parent">
        <option value="0">Chọn chuyên mục</option>
        @if(isset($cates))        
          <?php
            Response::showCates($cates,$selected);
          ?>
        @endif	  	
	</select>     
  </div>
  <div class="form-group removetest">
    <label for="text">Tên bài học</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="{{ old('txtName',isset($data) ? $data['name'] : '') }}">
    {{-- {!! $errors->first('txtName') !!} --}}
  </div>
  <div class="form-group">
    <label for="text">Thứ tự sắp xếp</label>
    <input type="text" class="form-control" name="order_by" placeholder="" value="{{ old('keywords',isset($data) ? $data['order_by'] : '') }}">
  </div>
  <div class="form-group">
    <label for="comment">Giới thiệu:</label>
    <textarea class="form-control ckeditor" rows="5" id="comment" name="textarea"></textarea>
  </div>
  <button type="submit" class="btn btn-default">{!! $btnAction !!}</button>
</form>
<script>
  // src="https://drive.google.com/file/d/1_QEs3zAbGrXXQwuTO9X4Nci_ssvBCuwu/preview"
    // $('#myFrame').show();
    // $("#load").attr("src", "http://www.sibeeshpassion.com/");
    // $('#myFrame').attr('src','https://drive.google.com/file/d/1_QEs3zAbGrXXQwuTO9X4Nci_ssvBCuwu/preview');
    // $('.drive-viewer-zoom-controls-v3').remove();
  // $('iframe').find('.drive-viewer-toolstrip').css('display','none');
  // $('#myFrame').css('width','800');
  // $('.drive-viewer-zoom-controls-v3').remove();
</script>