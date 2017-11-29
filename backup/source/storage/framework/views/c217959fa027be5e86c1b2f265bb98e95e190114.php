<?php if(isset($data)): ?>
  <?php $selected = $data['parent_id'];?>
  <form action="<?php echo route('postEdit',$data['id']); ?>" method="post">
<?php else: ?>
  <?php $selected = '0';?>
  <form action="<?php echo route('addCategory'); ?>" method="post">
<?php endif; ?>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="form-group">
    <label for="select">Chọn chuyên mục</label>    
    	<select class="form-control" name="parent">
        <option value="0">Chọn chuyên mục</option>
        <?php if(isset($cates)): ?>        
          <?php
            Response::showCates($cates,$selected);
          ?>
        <?php endif; ?>	  	
	</select>     
  </div>
  <div class="form-group removetest">
    <label for="text">Tên bài học</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="<?php echo e(old('txtName',isset($data) ? $data['name'] : '')); ?>">
    
  </div>
  <div class="form-group">
    <label for="text">Thứ tự sắp xếp</label>
    <input type="text" class="form-control" name="order_by" placeholder="" value="<?php echo e(old('keywords',isset($data) ? $data['order_by'] : '')); ?>">
  </div>
  <div class="form-group">
    <label for="comment">Giới thiệu:</label>
    <textarea class="form-control ckeditor" rows="5" id="comment" name="textarea"></textarea>
  </div>
  <button type="submit" class="btn btn-default"><?php echo $btnAction; ?></button>
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