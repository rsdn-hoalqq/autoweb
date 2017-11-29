<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/css/mystyle.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Thư Họa Phong Trần</h1>      
    <p>Thăng Hoa Nét Viết</p>
  </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">My Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="jligthBox.html">Gallery</a></li>
        <li><a href="#">Góc Thư Họa</a></li>
        <li><a href="slide.html">Slides</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Danh sách tranh</h3><br>
  <div class="row"> 
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-4 clMaxHeight">          
          <div class="title">
            <p class="cls_font">Thư pháp Trần Thế</p>
          </div>
          <div class="videos">
            <iframe style="width:100%" height="400" src="https://www.youtube.com/embed/tfUjUxUo1f0" frameborder="0" gesture="media" allowfullscreen></iframe>
          </div>
          <div class="clImages">
            <div class="row">
              <div class="column">
                <img src="<?php echo e(asset('/files/tranhthuphap/1.jpg')); ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="<?php echo e(asset('/files/tranhthuphap/2.jpg')); ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="<?php echo e(asset('/files/tranhthuphap/3.jpg')); ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="<?php echo e(asset('/files/tranhthuphap/4.jpg')); ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
              </div>
            </div>
          </div>
          <div class="comment"></div>          
        </div>

        <div class="col-sm-4"> 
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/2.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4"> 
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/3.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/4.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/5.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/6.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/7.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/8.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/5.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/1.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/4.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
          <p class="cls_font">Thư pháp Trần Thế</p>
          <img src="public/files/2.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
      </div>
    </div>
  </div>

</div>
<br>
<br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modelShow">    
      <div class="modal-content">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="<?php echo e(asset('/files/tranhthuphap/1.jpg')); ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="<?php echo e(asset('/files/tranhthuphap/2.jpg')); ?>" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="<?php echo e(asset('/files/tranhthuphap/3.jpg')); ?>" style="width:100%">
        </div>
        
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="<?php echo e(asset('/files/tranhthuphap/4.jpg')); ?>" style="width:100%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>


        <div class="column">
          <img class="demo cursor" src="<?php echo e(asset('/files/tranhthuphap/1.jpg')); ?>" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo e(asset('/files/tranhthuphap/2.jpg')); ?>" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo e(asset('/files/tranhthuphap/3.jpg')); ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo e(asset('/files/tranhthuphap/4.jpg')); ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
      </div>
  </div>
</div>
</body>
<script type="text/javascript" src="<?php echo e(asset('/js/myscript.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
</html>
