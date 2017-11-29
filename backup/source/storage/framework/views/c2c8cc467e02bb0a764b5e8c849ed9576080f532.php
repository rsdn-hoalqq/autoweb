<?php $__env->startSection('content'); ?>   
	<div class="panel panel-default">
		<div class="panel-heading headings">FORM CHỈNH SỮA CHUYÊN MỤC</div>
		<?php if(count($errors) > 0): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
		<?php endif; ?>
		<div class="panel-body">
			<?php echo $__env->make('admin.category.form',['btnAction'=>'Update','data'=>$data,'cates'=>$cates], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>