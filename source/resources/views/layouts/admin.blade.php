<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Quản Lý Danh Mục')</title>

  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/admin-style.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('/js/templateEditor/ckeditor/ckeditor.js') }}"></script>
  <script type="text/javascript">
    var baseUrl = "{{ asset('/')}}";
    var token = "{!! csrf_token()!!}";
  </script>
  <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
  {{-- <script type="text/javascript" src="{{ asset('/js/admin/jquery-3.2.1.slim.min.js') }}"></script> --}}
  <!-- Fonts -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>  
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('admin')}}">Admin Manager</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
        <li><a href="{{ url('/auth/login') }}">Login</a></li>
        <li><a href="{{ url('/auth/register') }}">Register</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
          </ul>
        </li>
      @endif
    </ul>
    </div>
  </nav>
  <div class="container-fluid bg-3">    
    <div class="row">
      <div class="col-sm-3 sidenav hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading headings">DANH MỤC QUẢN LÝ</div>
            <ul class="list-group">
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="{{ route('categoryList')}}">QUẢN LÝ MENU HIỂN THỊ</a>
                <a href="{{ route('addCate') }}" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới chuên mục!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="">QUẢN LÝ BÀI HỌC</a>
                <a href="{{ route('addCate') }}" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới Khóa học!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="{{ route('listProduct') }}">QUẢN LÝ SẢN PHẨM</a>
                <a href="{{ route('addProduct') }}" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới sản phẩm!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="">QUẢN LÝ HÌNH ẢNH</a>
                <a href="{{'add'}}" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới hình ảnh!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
              <li class="list-group-item">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                <a href="">QUẢN LÝ VIDEO</a>
                <a href="{{'add'}}" class="btn btn-success clIcon" data-toggle="tooltip" title="Tạo mới video!">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
        </div>
      </div>
      <div class="col-sm-9">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- Scripts -->  
  <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/myscript.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/admin/adminscript.js') }}"></script>
</body>
</html>
