@if(isset($data))
  <?php $selected = $data['parent_id'];?>
  <form action="{!! route('postEdit',$data['id'])!!}" method="post">
@else
  <?php $selected = '0';?>
  <form action="{!! route('addCategory')!!}" method="post">
@endif
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	<div class="form-group">
    <label for="select">Chuyên mục cha</label>    
    	<select class="form-control" name="parent">
        <option value="0">Chọn chuyên mục</option>
        @if(isset($cates))        
          <?php
          // show cate
            Response::showCates($cates,$selected);
          ?>
          {{-- @foreach($cates as $cate)
            @if(isset($data) && $data['parent_id'] == $cate['id'])
              <option value="{{ $cate['id'] }}" selected="selected">{!! $cate['name'] !!}</option>
            @else
              <option value="{{ $cate['id'] }}">{!! $cate['name'] !!}</option>
            @endif            
          @endforeach --}}
        @endif	  	
	</select>     
  </div>
  <div class="form-group">
    <label for="text">Tên chuyên mục</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="{{ old('txtName',isset($data) ? $data['name'] : '') }}">
    {{-- {!! $errors->first('txtName') !!} --}}
  </div>
  <div class="form-group">
    <label for="text">Keywords</label>
    <input type="text" class="form-control" name="keywords" placeholder="" value="{{ old('keywords',isset($data) ? $data['keywords'] : '') }}">
  </div>
  <div class="form-group">
    <label for="text">Thứ tự sắp xếp</label>
    <input type="text" class="form-control" name="order_by" placeholder="" value="{{ old('keywords',isset($data) ? $data['order_by'] : '') }}">
  </div>
  <div class="form-group">
  <label for="comment">Giới thiệu:</label>
  <textarea class="form-control ckeditor" rows="5" id="comment" name="textarea"></textarea>
</div>
  {{-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> --}}
  <button type="submit" class="btn btn-default">{!! $btnAction !!}</button>
</form>
