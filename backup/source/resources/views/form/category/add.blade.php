{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<h3>Form thêm mới chuyên mục</h3>
<hr/>
<form action="{!! route('addCategory')!!}" method="post">
	<input type="hidden" name="_token" value="{!! csrf_token()!!}">
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="txtName">
				{!! $errors->first('txtName') !!}
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Thêm mới"></td>
		</tr>
	</table>
</form>