@extends('layouts.default')
@section('content')	
<section>
	<div class="container">
	<div class="sect-person">
		<ul>
			<li>
				<a href="/lichchieu" class="theater">cgv theater</a>
			</li>
			<li>
				<a href="/phimdangchieu" class="now-sh">now showing</a>
			</li>
			<li>
				<a href="" class="special">cgv special</a>
			</li>
			<li>
				<a href="" class="event-con">cgv under construction</a>
			</li>
			<li>
				<a href="" class="ticket required-login">my ticket info</a>
			</li>
			<li>
				<a href="/news" class="dc">discount info</a>
			</li>
			<li>
				<a href="/admin" class="login-header">creat account quick</a>
			</li>
		</ul>
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
    		</ol>

    	<!-- Wrapper for slides -->
    	<div class="carousel-inner carousel-inner-top">
    		@foreach($sliders as $key => $slider)
		     	<div class="item {{ $key == 0 ? 'active' : '' }}">
		        	<img src="{{$slider->image_path}}" alt="">
		      	</div>
		    @endforeach
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
  			<h2 class="de1">Movie Selection</h2>
  		</div>

  		<div class="main-movie">
  			@foreach($products as $product)
		      <div class="col-xs-6 col-sm-4 col-md-2 product-box">
		      	<div class="box">
					<a href="{{ route('chitietphim', $product->id) }}">
					<img class="model" src="{{$product->feature_image_path}}"></a>
					<div class="infofilm">
						<h3>{{ $product->name }}</h3>
						<p>{{ $product->theloai }}</p>
						<p>{{ $product->khoichieu }}</p>
						<a href="{{ route('chitietphim', $product->id) }}" class="but">Mua vé</a>
					</div>
				</div>
		      </div>
		    @endforeach
		</div>
		</div>
		<div class="container">
			  <!-- event -->
			  <div class="descrip">
			  	<h2 class="de2">Event</h2>
			  </div>
			  <div class="event">
				  	<div class="col-md-12">
				  		@foreach($servers as $server)
						<div class="col-md-3">
							<a href="{{ route('chitietdichvu', $server->id) }}"><img class="model1" src="{{$server->image_path}}"></a>
						</div>
						@endforeach
					</div>
			  	</div>
			  </div>
			  <!-- news -->
			
			  <div class="container">
			  	<div class="col-md-12 news">
					<div class="col-md-3">
						<a href=""><img class="news1" src="{{asset('img/214x245.jpg')}}"></a>
					</div>
					<div class="col-md-6">
						<a href=""><img class="news1" src="{{asset('img/U22_WEB_496x247.jpg')}}"></a>
					</div>
					<div class="col-md-3">
						<a href=""><img class="news1" src="{{asset('img/214x245.jpg')}}"></a>
					</div>
				</div>
			</div>
			
	<script src="js/script.js" type="text/javascript"></script>
</section>
@stop
<style type="text/css">
	.model{
		width: 100%;
		height: 221px;
	}
	.product-box{
		margin-bottom: 15px;
	    padding-bottom: 65px;
	    padding-top: 15px;
	    position: relative;
	}
	.product-box:hover{
		box-shadow: 0px 0px 30px 0px rgba(30,0,255,0.75);
	}
	.infofilm h3{
		padding-top: 5px;
		text-transform: uppercase;
		color: #337ab7;
		font-size: 19px;
		height: 49px;
	}
	.but{
		border-radius: 5px;
		border: 0.5px solid #50c5ff;
		background-color: transparent;
		padding: 10px;
		position: absolute;
    	left: 25%;
    	margin-top: 15px;
	}
	.but:hover{
		background-color: #50c5ff;
		color: white;
	}
	.news{
		border-top: 3px solid black;
		border-bottom: 3px solid black;
		padding: 15px;
	}
	.news1{
		border: 3px solid black;
	}
	.tophome{
		background: url(/img/icon/bg_c_bricks.png);
		height: 448px;
	}
	.item img{
		width: 100%;
		height: 448px!important;
	}
	.de1 {
	    background: url(../img/icon/h3_movie_selection.gif) no-repeat scroll center center / 406px 41px #FDFCF0;
	    display: inline-block;
	    width: 425px;
	    height: 60px;
    	text-indent: -99999px;
	}
	.de2{
		background: url(../img/icon/h3_event.gif) no-repeat scroll center center / 142px 41px #FDFCF0;
	    display: inline-block;
	    width: 18%;
	    height: 60px;
    	text-indent: -99999px;
	}
	@media only screen and (min-width: 771px){
		.sect-person {
		    border-bottom: 1px solid #222;
		    display: block;
		    margin-bottom: 10px;
		    margin-top: 15px;
		    padding-bottom: 6px;
		    text-align: center;
		    height: 108px;
		}
		.sect-person ul {
		    border-bottom: 1px solid #222;
		    padding-bottom: 10px;
		    margin-left: 0px !important;
		    width: 100%;
		}
		.sect-person li:first-child {
		    border-left: medium none;
		}
		.sect-person li {
		    border-left: 1px solid #222;
		    display: inline-block;
		    vertical-align: baseline;
		    word-break: break-all;
		}
		.sect-person ul li a {
		    background-image: url(../img/bg-header-transparent-home.png);
		    display: block;
		    height: 90px;
		    text-indent: -9999px;
		    width: 139px;
		}
		.sect-person ul li a.theater {
		    background-position: 10px 0;
		}
		.sect-person ul li a.now-sh {
		    background-position: -140px 0;
		}
		.sect-person ul li a.special {
		    background-position: -280px 0;
		}
		.sect-person ul li a.event-con {
		    background-position: -420px 0;
		}
		.sect-person ul li a.ticket {
		    background-position: -560px 0;
		}
		.sect-person ul li a.dc {
		    background-position: -700px 0;
		}
		.sect-person ul li a.login-header {
		    background-position: -830px 0;
		}
	}
	.carousel-indicators li{
		display: none !important;
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
	}
</style>

