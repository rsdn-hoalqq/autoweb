<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.common.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="panel panel-default">
	<div class="panel-heading headings">FORM THÊM MỚI SẢN PHẨM</div>

	<?php echo $__env->make('admin.common.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="panel-body">
		<?php echo $__env->make('admin.post.form',['btnAction'=>'Thêm mới','cates'=>$cates], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>