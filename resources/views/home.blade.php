@extends('layouts.default')
@section('content')	
<section>
	<div class="container">
		<!-- adver -->
		<div class="adver">
			<img src="{{asset('img/bg-header-transparent-home.png')}}">
			
		</div>
	</div>
	<div class="tophome">
		<div class="container">
		<!-- carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
    	<!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
      			<li data-target="#myCarousel" data-slide-to="3"></li>
      			<li data-target="#myCarousel" data-slide-to="4"></li>
      			<li data-target="#myCarousel" data-slide-to="5"></li>
      			<li data-target="#myCarousel" data-slide-to="6"></li>
      			<li data-target="#myCarousel" data-slide-to="7"></li>
    		</ol>

    	<!-- Wrapper for slides -->
    	<div class="carousel-inner carousel-inner-top">
     	<div class="item active">
        	<img src="{{asset('img/rsz_rom_khoi_chieu_980x448.jpg')}}" alt="Phim Ròm" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/980x448_74.jpg')}}" alt="phù thủy tối thượng" style="width:100%;">
      	</div>
    
      	<div class="item">
        	<img src="{{asset('img/980x448_78.jpg')}}" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/980x448_9__4.jpg')}}" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/cgv-brand-team-phim-hay-thang--980x448.jpg')}}" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/cgv-digital-team-x-innerb-980x448.jpg')}}" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/rolling_banner_1__1.jpg')}}" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="{{asset('img/rolling_banner.jpg')}}" alt="" style="width:100%;">
      	</div>
    	</div>

    	<!-- Left and right controls -->
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
</div>
	<div class="container">
  		<!-- movie selection -->

  		<div class="descrip">
  			<img src="{{asset('img/h3_movie_selection.gif')}}">
  		</div>

  		<div class="main-movie">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
						<div class="infofilm">
							<h3>Biệt thự xác sống</h3>
							<p>Thể loại: Kinh dị</p>
						</div>
					</div>
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
						
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			      <div class="col-md-3">
			      	<div class="box">
						<img class="model" src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
					</div>
			      </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
				
		</div>

			  <!-- event -->
			  <div class="descrip">
			  	<img src="{{asset('img/h3_event.gif')}}">
			  </div>

			  <div class="tit">
					<p>Tin mới & Ưu đãi | Thành viên CGV</p>
			  </div>

			  <div class="event">
				  	<div class="col-md-12">
						<div class="col-md-3">
							<img class="model1" src="{{asset('img/viettel-pay-240x201.png')}}">
						</div>
						
						<div class="col-md-3">
							<img class="model1" src="{{asset('img/uu-dai-visa-cgv-24x201.jpg')}}">
						</div>
						
						<div class="col-md-3">
							<img class="model1" src="{{asset('img/u22_240x201.jpg')}}">
						</div>
						
						<div class="col-md-3">
							<img class="model1" src="{{asset('img/happywednesday240x201_1.jpg')}}">
						</div>
					</div>
			  	</div>
			  <!-- adver -->
			  <div class="adver">
			  	<div class="col-md-12">
			  	<div class="col-md-3">
			  	<img src="{{asset('img/214x245.jpg')}}">
			  	</div>
			  	<div class="col-md-6">
			  	<img src="{{asset('img/U22_496x247.jpg')}}">
			  </div>
			  	<div class="col-md-3">
			  	<img src="{{asset('img/LATE-SHOW-NEW-12.2019-214x245.jpg')}}">
			  </div>
			  </div>
			  </div>
	</div>
	<script src="js/script.js" type="text/javascript"></script>
</section>
@stop
<style type="text/css">
	.box{
		position: relative;
	}
	.infofilm{
		display: none;
	}
	.box img:hover + .infofilm{
		display: block;
		background: black;
		opacity: 0.7;
	    z-index: 1;
	    margin-top: -50px;
	    width: 100%;
	    text-align: center;
	    color: white;
	}
	.adver img{
		display: block;
	    margin-left: auto;
	    margin-right: auto;
	    border-bottom: 2px solid black;
	}

	.carousel-indicators li{
		display: none !important;
	}
	.main-movie{
		margin-top: 25px;
	}
	.tophome{
		margin-top: 15px;
		background: url({{asset('img/bg_c_bricks.png);
		height: 450px;
	}
	.tit{
		margin-top: 20px;
		height: 50px;
    	list-style: none outside none;
    	text-align: center;
    	background-color: #e71a0f;
		width: 300px;
		margin-left: auto;
		margin-right: auto;
	}
	.tit p{
		font-weight: bold;
		color: white;
		line-height: 50px;
	}
	.event{
		padding-bottom: 10px;
		border-bottom: 2px solid black;
	}
	.carousel-inner-top{
		height: 450px;
	}
</style>

