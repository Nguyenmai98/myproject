@extends('layouts.default')
@section('content')	
<div class="container news">
	<div class="descrip">
		<img src="img/bg-new-offer-vn.png">
	</div>
	<!-- main section -->
	<div class="mainnews">
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/240-x-201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/240-x-201_5.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/240_2.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/240x201_1.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/240_X_201.png"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/CGV-CRM-TEAM-CULTURE-DAY-NEW-2019-ARTWORK-1-240X201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/cgv-crm-team-membership-launch-240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/CGV-CRM-TEAM-U2-ARTWORK-1-240X201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/cgv-digital-team-x-innerb-240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/CGV-VVIP-GIFT-SET-LAUNCH-240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/CGV_1k_240x201_180920.png"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/CGV_79k_240x201_170920.png"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/cham-240.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/coco-240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/culture-240_1.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/dong-gia-240-x-201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/goldsport-cgv1.png"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/Grab-240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/HAPPY_WEDNESDAY-FINAL_240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/happywednesday240x201_1.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
		<ul class="compo">
			<li class="component">
				<a href=""><img src="img/HSBC_Platinum-CGV_Digital-Poster_240x201px.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/KEY_ART-FINAL-NO_LOGO_240x201.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/Mushroom---240-x-201_1.jpg"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
			<li class="component">
				<a href=""><img src="img/sacombank-CGV-240x201.png"></a>
				<div class="calendar"><a class="time" href="">9/10/2020</a></div>
			</li>
		</ul>
	</div>
</div>
@endsection
<style type="text/css">
	.compo{
		margin-top: 20px;
		display: flex;
		position: relative;
		width: 100%;
		background: transparent;
	}
	.component{
		margin-right: 25px;
	}
	.calendar{
		margin-top: 10px;
		background: url(img/calendar-icon-smaill.png) no-repeat;
	}
	.time{
		margin-left: 25px;
	}
	.mainnews{
		margin-bottom: 10px;
		margin-top: 30px;
	}
</style>