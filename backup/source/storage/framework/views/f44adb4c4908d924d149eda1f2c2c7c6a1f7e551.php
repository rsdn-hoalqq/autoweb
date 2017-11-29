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
	<div class="panel-heading headings">FORM THÊM MỚI CHUYÊN MỤC</div>
	<?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="panel-body">
		<?php echo $__env->make('admin.category.form',['btnAction'=>'Thêm mới','cates'=>$cates], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>