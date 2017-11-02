@extends('admin')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h3>Chỉnh sữa chuyên mục</h3>
<hr/>
    @include('admin.category.form',['btnAction'=>'Update'])

@endsection