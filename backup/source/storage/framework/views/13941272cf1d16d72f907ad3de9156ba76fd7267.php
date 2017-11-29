<?php $__env->startSection('content'); ?>
<h3>Tạo mới table</h3>
<hr/>
<?php echo e(Form::open(array('url' => '/'))); ?>

	<div class="form-group">
	    <?php echo e(Form::label('text','Table Name')); ?>

	    <?php echo e(Form::input('input','name','',['class'=>'class name','maxleng'=>'8'])); ?>

	 </div>	
<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>