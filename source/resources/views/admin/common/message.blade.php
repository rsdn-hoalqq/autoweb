@if(Session::has('message_flag'))
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-{!! Session::get('alert') !!}">
				{!! Session::get('message_flag') !!}
			</div>
		</div>
	</div>
@endif