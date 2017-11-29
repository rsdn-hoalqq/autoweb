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
      <div class="panel-heading headings">DANH SÁCH SẢN PHẨM</div>      
      <div class="panel-body">
        <?php if($products): ?>
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
				    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<?php $stt ++?>
				    	<tr>
				    		<td><?php echo $stt; ?></td>
				    		<td><?php echo $product['name']; ?></td>
				    		<td><?php echo $product['description']; ?></td>
				    		<td>
				    			<?php 
				    				$nameCate = DB::table('categories')->select('name')->where('id',$product['cate_id'])->first();
				    				echo empty($nameCate) ? '' : $nameCate->name;
				    			?>
				    		</td>
				    		<td><?php echo $product['status']; ?></td>
				    		<td class="text-center">
				    			<a href="<?php echo e('view/'.$product['id']); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a>
				    			<a href="<?php echo e('edit/'.$product['id']); ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
				    			<a href="<?php echo e('delete/'.$product['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
<?php echo $__env->make('admin.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>