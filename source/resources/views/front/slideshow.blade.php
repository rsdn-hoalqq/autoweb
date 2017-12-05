<div class="slides-wrapper">
	<div class="slides">      
	  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner">
	        <div class="item active">
	          <img src="{{ asset('files/tranhthuphap/slide1.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
	        </div>
			@foreach($images as $value)
			  	<div class="item">
			    	<img src="{{ asset('files/tranhthuphap/'.$value)}}" class="img-responsive" style="width:100%" alt="Image">
			  	</div>
		  	@endforeach
	      </div>

	      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div>
	</div>

	<div class="item-slides">
	  <div class="img-row">
	    <p class="space"></p>
	    News
	    <p class="space"></p>
	  </div>
	</div>
</div>