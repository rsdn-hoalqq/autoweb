<?php $__env->startSection('content'); ?>
	
	<?php if(Session::has('message_flag')): ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-<?php echo Session::get('alert'); ?>">
					<?php echo Session::get('message_flag'); ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<div class="panel panel-default">
      <div class="panel-heading headings">QUẢN LÝ MENU HIỂN THỊ</div>      
      <div class="panel-body">
        <?php if($categorys): ?>
			<table class="table table-striped">
				<thead>
				    <tr>
				      	<th scope="col">STT</th>
				      	<th scope="col">Tên chuyên mục</th>
				      	<th scope="col">OrderBy</th>
				      	<th>Actions</th>
				    </tr>
				    <?php $stt = 0;?>
				    <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<?php $stt ++?>
				    	<tr>
				    		<td><?php echo $stt; ?></td>
				    		<td><?php echo $category['name']; ?></td>
				    		<td><?php echo $category['order_by']; ?></td>
				    		<td>
				    			<a href="<?php echo e('edit/'.$category['id']); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="<?php echo e('delete/'.$category['id']); ?>" class="btn btn-success" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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