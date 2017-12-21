<nav class="navbar navbar-inverse" id="mainmenu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-color" href="#">TRANH THƯ PHÁP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="actives text-color"><a href="/"><span class="glyphicon glyphicon-home text-color" aria-hidden="true"></span></a></li>
        <li><a href="/" class="text-color">Trang chủ</a>
        </li>
        {{-- @foreach($cates as $cate)
          <li><a class="text-color" href="/{{ $cate['slug']}}">{{ $cate['name']}}</a></li>   
        @endforeach --}}  
        <li class="dropdown">
          <a class="text-color" data-toggle="dropdown" href="#">Page 1
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
      </ul>
      {{-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="text-color"><span class="glyphicon glyphicon-log-in text-color"></span> Đăng nhập</a></li>
        <li><a href="#" class="text-color"><span class="glyphicon glyphicon-user text-color" aria-hidden="true"></span> Đăng kí</a></li>
      </ul> --}}
    </div>
  </div>
</nav>