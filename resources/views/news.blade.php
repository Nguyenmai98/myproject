@extends('layouts.default')
@section('content')	
<div class="container news">
	<div class="descrip">
		<h2 class="de">Tin mới và ưu đãi</h2>
	</div>
	<!-- main section -->
	<div class="mainnews">
		<ul class="compo">
			@foreach($servers as $server)
				<li class="component">
					<a href="{{ route('chitietdichvu', $server->id) }}"><img src="{{$server->image_path}}"></a>
					<div class="calendar"><a class="time" href="">{{$server->ngayhieuluc}}</a></div>
				</li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
<style type="text/css">
	.de{
		background: url(../img/icon/bg-new-offer-vn.png) no-repeat scroll center center / 142px 41px #FDFCF0;
	    display: inline-block;
	    background-size: 410px 46px;
	    width: 410px;
	    height: 60px;
    	text-indent: -99999px;
	}
	.compo{
		display: inline-block;
	    position: relative;
	    width: 100%;
	    z-index: 5;
	    background: transparent;
	}
	.component{
		margin-right: 20px;
    	width: 23%;
    	float: left;
	}
	.calendar{
		margin-top: 10px;
		background: url(img/icon/calendar-icon-smaill.png) no-repeat;
	}
	.time{
		margin-left: 25px;
	}
	.mainnews{
		margin-bottom: 10px;
		margin-top: 30px;
	}
</style>