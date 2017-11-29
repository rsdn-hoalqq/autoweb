<?php $__env->startSection('content'); ?>
<?php if(Session::has('message')): ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-success">
				<?php echo Session::get('message'); ?>

			</div>
		</div>
	</div>
<?php endif; ?>
<div class="panel panel-default">
	<div class="panel-heading headings">CHI TIẾT SẢN PHẨM</div>
	<div class="panel-body" style="height: 300px">
		<div class="row">
			<table class="table">
				<tr>
			        <th style="width: 10%">Tên sản phẩm</th>
			        <th style="width: 10%">Giá bán</th>
			        <th>Mô tả</th>
			        <th style="width: 10%">Trạng thái</th>
			    </tr>
				<tr>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo number_format($product['price']); ?></td>
					<td><?php echo $product['description']; ?></td>
					<td>
						<?php if($product['status']): ?>
							Bản chính
						<?php else: ?>
							Bản nháp
						<?php endif; ?>
					</td>
				</tr>
			</table>
		</div>		
	</div>
</div>
 <div class="panel panel-default">
	<div class="panel-heading headings">HÌNH ẢNH CỦA SẢN PHẨM</div>
	<div class="panel-body">
		<div class="row" id="album-artwork">
			<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4 block-images">
					<div class="img-thumbnail item-images">
						<div class="titleImage">
							<form action="<?php echo route('deleteProduct',$image['id']); ?>" id="<?php echo 'frmDelete'.$image['id']; ?>" method="post">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<input type="hidden" name="name" value="<?php echo $image['path']; ?>">
								<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
									<img src="<?php echo e(asset('files/icon/delete.jpg')); ?>" alt="icon delete" class="img-responsive iconDelete" data-toggle="tooltip" title="Xóa hình ảnh này!" onclick="deleteImage(<?php echo $image['id']; ?>)">
							</form>
						</div>
						<img src="<?php echo e(asset('files/product/'.$image['path'])); ?>" alt="" class="img-responsive" style="width: 100%;height: 315px;">
					</div>					
				</div>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>