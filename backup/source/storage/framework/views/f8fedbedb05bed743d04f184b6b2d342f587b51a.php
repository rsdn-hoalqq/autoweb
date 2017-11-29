<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
	<div class="panel-heading headings">FORM TẠO MỚI BÀI HỌC</div>
	<?php echo $__env->make('form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
	<div class="panel-body">
		<iframe id="myFrame" src="" width="640" height="480"></iframe>
		

		<?php echo $__env->make('admin.lession.form',['btnAction'=>'Tạo mới bài học','cates'=>$cates], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>