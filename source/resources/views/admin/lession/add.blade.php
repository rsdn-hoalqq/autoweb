@extends('admin.dashboard')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading headings">FORM TẠO MỚI BÀI HỌC</div>
	@include('form.error')	
	<div class="panel-body">
		<iframe id="myFrame" src="" width="640" height="480"></iframe>
		{{-- <div><object width="790" height="282">
<embed src="link banner" width="790" height="282" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" menu="false" wmode="transparent"></embed></object></div> --}}
{{-- <embed src="{{ asset('files/lession/LUU Y KSK DINH KY.pdf')}}" bgcolor="#CCCCCC" type="application/x-shockwave-flash" allowscriptaccess="false" height="282" width="790"></embed> --}}
		@include('admin.lession.form',['btnAction'=>'Tạo mới bài học','cates'=>$cates])
	</div>
</div>
  

@endsection