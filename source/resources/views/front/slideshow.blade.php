<div class="slides-wrapper">
	<div class="slides">      
	  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <div class="carousel-inner">
	        <div class="item active">
	          <img src="{{ asset('/public/files/tranhthuphap/slide1.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
	        </div>
			@foreach($images as $value)
			  	<div class="item">
			    	<img src="{{ asset('/public/files/tranhthuphap/'.$value)}}" class="img-responsive" style="width:100%" alt="Image">
			  	</div>
		  	@endforeach
	      </div>

	      {{-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right"></span>
	        <span class="sr-only">Next</span>
	      </a> --}}
	    </div>
	</div>

	<div class="item-slides">
	  <div class="img-row">
	  	<div class="panel panel-default heading-new">
	  		<div class="panel-heading heading heading-news"><a href="/" class="headings" data-toggle="tooltip" title="Click để xem nhều hơn">TIN MỚI</a></div>
		    <div class="row clss-news">
		    	<div class="col-sm-4">
		    		<div class="image-thumbnail">
		    			<img src="{{ asset('/public/files/tranhthuphap/tranh1.jpg')}}" alt="" class="img-responsive">
		    		</div>
		    	</div>
		    	<div class="col-sm-8">
		    		<div class="caption">
		    			<div class="title-new">Ten tin tuc</div>
			            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			        </div>
		    	</div>
		    </div>

		    <div class="row clss-news">
		    	<div class="col-sm-4">
		    		<div class="image-thumbnail">
		    			<img src="{{ asset('/public/files/tranhthuphap/tranh1.jpg')}}" alt="" class="img-responsive">
		    		</div>
		    	</div>
		    	<div class="col-sm-8">
		    		<div class="caption">
		    			<div class="title-new">Ten tin tuc</div>
			            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			        </div>
		    	</div>
		    </div>
		    <div class="row clss-news">
		    	<div class="col-sm-4">
		    		<div class="image-thumbnail">
		    			<img src="{{ asset('/public/files/tranhthuphap/tranh1.jpg')}}" alt="" class="img-responsive">
		    		</div>
		    	</div>
		    	<div class="col-sm-8">
		    		<div class="caption">
		    			<div class="title-new">Ten tin tuc</div>
			            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
			        </div>
		    	</div>
		    </div>		    
	  	</div>	  	
	  </div>
	</div>
</div>