
<h3>Form thêm mới chuyên mục</h3>
<hr/>
<form action="<?php echo route('addCategory'); ?>" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="txtName">
				<?php echo $errors->first('txtName'); ?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Thêm mới"></td>
		</tr>
	</table>
</form>