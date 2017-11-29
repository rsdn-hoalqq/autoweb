<?php if(Session::has('message_flag')): ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-<?php echo Session::get('alert'); ?>">
				<?php echo Session::get('message_flag'); ?>

			</div>
		</div>
	</div>
<?php endif; ?>