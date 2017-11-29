<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('admin.common.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<div class="panel panel-default">
      <div class="panel-heading headings">DANH SÁCH SẢN PHẨM</div>      
      <div class="panel-body">
        <?php if($posts): ?>
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
				    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<?php $stt ++?>
				    	<tr>
				    		<td><?php echo $stt; ?></td>
				    		<td><?php echo $post['name']; ?></td>
				    		<td><?php echo $post['description']; ?></td>
				    		<td>
				    			<?php 
				    				$nameCate = DB::table('categories')->select('name')->where('id',$post['cate_id'])->first();
				    			?>
				    			<?php echo $nameCate->name; ?>

				    		</td>
				    		<td><?php echo $post['status']; ?></td>
				    		<td class="text-center">
				    			<a href="<?php echo e('view/'.$post['id']); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a>
				    			<a href="<?php echo e('edit/'.$post['id']); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="<?php echo e('delete/'.$post['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				    		</td>
				    	</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</thead>
			</table>
		<?php else: ?>
			Chưa có chuyên mục nào!
		<?php endif; ?>
      </div>
    </div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>