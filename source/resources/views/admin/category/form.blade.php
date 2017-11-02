<script type="text/javascript">  
     CKEDITOR.replace( 'ckeditor' );  
  </script>
@if(isset($data))
  <form action="{!! route('addCategory')!!}" method="post">
@else
  <form action="{!! route('addCategory')!!}" method="post">
@endif
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	<div class="form-group">
    <label for="select">Chuyên mục cha</label>
    	<select class="form-control" name="parent">
	  	<option value="0">Chọn chuyên mục</option>
	</select>     
  </div>
  <div class="form-group">
    <label for="text">Tên chuyên mục</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="{{ old('txtName',isset($data) ? $data['name'] : '') }}">
    {{-- {!! $errors->first('txtName') !!} --}}
  </div>
  <div class="form-group">
    <label for="text">Keywords</label>
    <input type="text" class="form-control" name="keywords" placeholder="" value="{{ old('keywords',isset($data) ? $data['name'] : '') }}">
  </div>
  <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control ckeditor" rows="5" id="comment" name="textarea"></textarea>
</div>
  {{-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> --}}
  <button type="submit" class="btn btn-default">{!! $btnAction !!}</button>
</form>
