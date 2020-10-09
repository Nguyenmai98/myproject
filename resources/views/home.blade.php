@extends('layouts.default')
@section('content')	
<section>
	<div class="container">
		<!-- adver -->
		<div class="adver">
			<img src="img/bg-header-transparent-home.png">
			
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
    	<div class="carousel-inner">
     	<div class="item active">
        	<img src="/img/rsz_rom_khoi_chieu_980x448.jpg" alt="Phim Ròm" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/980x448_74.jpg" alt="phù thủy tối thượng" style="width:100%;">
      	</div>
    
      	<div class="item">
        	<img src="/img/980x448_78.jpg" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/980x448_9__4.jpg" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/cgv-brand-team-phim-hay-thang--980x448.jpg" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/cgv-digital-team-x-innerb-980x448.jpg" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/rolling_banner_1__1.jpg" alt="" style="width:100%;">
      	</div>

      	<div class="item">
        	<img src="/img/rolling_banner.jpg" alt="" style="width:100%;">
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
  			<img src="img/h3_movie_selection.gif">
  		</div>

  		<div class="main-movie">
  			
				<div class="box">
					<img class="model" src="/img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg">
				</div>
				
				<div class="box">
					<img class="model" src="/img/the_magic_kids_-_poster_facebook_size_1.jpg">
				</div>
				
				<div class="box">
					<img class="model" src="/img/smm_-_tro_choi_cua_quy-_poster_goc_1__1.jpg">
				</div>
				
				<div class="box">
					<img class="model" src="/img/rsz_smm-chiecbalo__-_poster_offcial_1.jpg">
				</div>
				
				<div class="box">
					<img class="model" src="/img/rsz_poster_m_n_x_c_1.jpg">
				</div>
				
			</div>

			  <!-- event -->
			  <div class="descrip">
			  	<img src="img/h3_event.gif">
			  </div>

			  <div class="tit">
			  	<p>Tin mới & Ưu đãi | Thành viên CGV</p>
			  </div>

			  <div class="event">
			  	<div class="col-md-12">
				<div class="col-md-3">
					<img class="model1" src="/img/viettel-pay-240x201.png">
				</div>
				
				<div class="col-md-3">
					<img class="model1" src="/img/uu-dai-visa-cgv-24x201.jpg">
				</div>
				
				<div class="col-md-3">
					<img class="model1" src="/img/u22_240x201.jpg">
				</div>
				
				<div class="col-md-3">
					<img class="model1" src="/img/happywednesday240x201_1.jpg">
				</div>
				</div>
			  </div>

			  <!-- adver -->
			  <div class="adver">
			  	<div class="col-md-12">
			  	<div class="col-md-3">
			  	<img src="img/214x245.jpg">
			  	</div>
			  	<div class="col-md-6">
			  	<img src="img/U22_496x247.jpg">
			  </div>
			  	<div class="col-md-3">
			  	<img src="img/LATE-SHOW-NEW-12.2019-214x245.jpg">
			  </div>
			  </div>
			  </div>
	</div>
	<script src="js/script.js" type="text/javascript"></script>
</section>
@stop
<style type="text/css">
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
		background: url(img/bg_c_bricks.png);
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
</style>

