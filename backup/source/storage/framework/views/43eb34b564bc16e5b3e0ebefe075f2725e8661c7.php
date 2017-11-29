<?php if(isset($data)): ?>
  <?php $selected = $data['parent_id'];?>
  <form action="<?php echo route('postEdit',$data['id']); ?>" method="post">
<?php else: ?>
  <?php $selected = '0';?>
  <form action="<?php echo route('addCategory'); ?>" method="post">
<?php endif; ?>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="form-group">
    <label for="select">Chuyên mục cha</label>    
    	<select class="form-control" name="parent">
        <option value="0">Chọn chuyên mục</option>
        <?php if(isset($cates)): ?>        
          <?php
          // show cate
            Response::showCates($cates,$selected);
          ?>
          
        <?php endif; ?>	  	
	</select>     
  </div>
  <div class="form-group">
    <label for="text">Tên chuyên mục</label>
    <input type="text" class="form-control" name="txtName" placeholder="" value="<?php echo e(old('txtName',isset($data) ? $data['name'] : '')); ?>">
    
  </div>
  <div class="form-group">
    <label for="text">Thứ tự sắp xếp</label>
    <input type="text" class="form-control" name="order_by" placeholder="" value="<?php echo e(old('keywords',isset($data) ? $data['order_by'] : '')); ?>">
  </div>
  <div class="checkbox">
    <label><input type="radio" checked="checked" name="published" value="1">Published</label>
    <label><input type="radio" name="published" value="0">Draw</label>
  </div>
  <button type="submit" class="btn btn-default"><?php echo $btnAction; ?></button>
</form>
