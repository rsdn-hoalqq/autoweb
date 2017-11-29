<?php if(isset($data)): ?>
  <?php $selected = $data['cate_id'];?>
  <form action="<?php echo route('editProduct',$data['id']); ?>" method="post" enctype="multipart/form-data">
<?php else: ?>
  <?php $selected = '0';?>
  <form action="<?php echo route('postProduct'); ?>" method="post" enctype="multipart/form-data">
<?php endif; ?>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  
  <div class="row">
    <div class="col-sm-8">
      <div class="form-group">
        <label for="select">Sản phẩm thuộc chuyên mục?</label>    
          <select class="form-control" name="cate_id">
            <option value="0">Chọn chuyên mục</option>
            <?php if(isset($cates)): ?>        
              <?php Response::showCates($cates,$selected); ?>
            <?php endif; ?>      
      </select>     
      </div>
      <div class="form-group">
        <label for="text">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name="txtName" placeholder="" value="<?php echo e(old('txtName',isset($data) ? $data['name'] : '')); ?>">
      </div>
      <div class="form-group">
        <label for="text">Giá Bán</label>
        <input type="text" class="form-control" name="txtPrice" placeholder="" value="<?php echo e(old('txtName',isset($data) ? $data['price'] : '')); ?>">
      </div>
      <div class="form-group">
        <label for="comment">Mô tả ngắn</label>
        <textarea class="form-control ckeditor" rows="5" name="txtDescription"><?php echo e(old('txtDescription',isset($data) ? $data['description'] : '')); ?></textarea>
      </div>
      <div class="form-group">
        <label for="text">Nội dung chi tiêt</label>
        <textarea class="form-control ckeditor" rows="5" name="txtContent"><?php echo e(old('txtContent')); ?></textarea>
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
      <button type="submit" class="btn btn-default"><?php echo $btnAction; ?></button>
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
          <?php if(isset($images)): ?>     
            <div class="row" style="margin-left: 0px">       
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-6 divImages img-thumbnail">
                <div class="titleImage">
                  <img src="<?php echo e(asset('files/icon/delete.jpg')); ?>" alt="icon delete" class="img-responsive iconDeletes" data-toggle="tooltip" title="Xóa hình ảnh này!" onclick="deleteImage(<?php echo $image['id']; ?>)">
                </div>
                <img src="<?php echo e(asset('/files/product/'.$image['path'])); ?>" alt="<?php echo e($image['name']); ?>" class="img-responsive clsImageAdmin">
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </div> 
          <?php endif; ?>
        
        <div class="divImage" id="divImage">
          <input type="file" name="image[]" class="clsImage">
          <input type="text" class="form-control" name="nameImage[]" id="" placeholder="Name Image">
        </div>
        <span class="glyphicon glyphicon-plus btn btn-success" aria-hidden="true" data-toggle="tooltip" title="Thêm mới hình ảnh!" id="addImage"></span>
      </div>
    </div>
  </div>	
</form>
