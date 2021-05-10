@extends('layouts.default')
@section('content')
<div class="container">
	<div class="voucher">
		<ul>
			<li class="active">
				<button class="movie-voucher tablink" onclick="openPage('detailmv')" 
				id="defaultOpen">Voucher Phim</button>
			</li>
			<li>
				<button class="gift-card tablink" onclick="openPage('detailgc')">Thẻ Quà Tặng</button>
			</li>
		</ul>
	</div>
	<div class="tabcontent" id="detailmv">
		<h1>Voucher Phim</h1>
		<div class="row">
		<div class="gvoucher">
			<div class="detail">
				<p><b>Voucher 2D</b></p>
				<p>100.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị đổi vé xem phim 2D</p>
			</div>
			<a href=""><img src="{{asset('img/ticket_voucher_2_.png')}}"></a>
		</div>
		<div class="gvoucher">
			<div class="detail">
				<p><b>Voucher 3D</b></p>
				<p>130.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị đổi vé xem phim 3D</p>
			</div>
			<a href=""><img src="{{asset('img/ticket_voucher_2__1.png')}}"></a>
		</div>
		<div class="gvoucher">
			<div class="detail">
				<p><b>Voucher Gold Class</b></p>
				<p>250.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị đổi vé xem phim rạp Gold Class</p>
			</div>
			<a href=""><img src="{{asset('img/special_cinema-04-cropped.jpg')}}"></a>
		</div>
		</div>
		<div class="row">
		<div class="gvoucher">
			<div class="detail">
				<p><b>Voucher IMAX</b></p>
				<p>180.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị đổi vé xem phim IMAX 2D/3D</p>
			</div>
			<a href=""><img src="{{asset('img/special_cinema-02-cropped.jpg')}}"></a>
		</div>
		<div class="gvoucher">
			<div class="detail">
				<p><b>Voucher 4DX</b></p>
				<p>180.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị đổi vé xem phim 4DX 2D/3D</p>
			</div>
			<a href=""><img src="{{asset('img/special_cinema-03-cropped.jpg')}}"></a>
		</div>
		</div>
	</div>
	<div class="tabcontent" id="detailgc">
		<h1>Thẻ Quà Tặng</h1>
		<div class="row">
		<div class="gvoucher">
			<div class="detail">
				<p><b>Thẻ Quà Tặng - 300.000đ</b></p>
				<p>300.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị như tiền mặt</p>
			</div>
			<a href=""><img src="{{asset('img/gift_card_-_cinox_1.png')}}"></a>
		</div>
		<div class="gvoucher">
			<div class="detail">
				<p><b>Thẻ Quà Tặng - 500.000đ</b></p>
				<p>500.000đ <b><span style="background-color: red; color: white">MUA</span></b></p>
				<p>Có giá trị như tiền mặt</p>
			</div>
			<a href=""><img src="{{asset('img/gift_card_-_cinox_1.png')}}"></a>
		</div>
		</div>
	</div>
</div>
@endsection
<script type="text/javascript">
	window.onload = function () {
        startTab();
    };

    function startTab() {
        document.getElementById("defaultOpen").click();

    }
	function openPage(pageName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablink");
	  
	  document.getElementById(pageName).style.display = "block";
	}

</script>
<style type="text/css">
	.voucher ul {
	    width: 100%;
	    text-align: center;
	    height: 150px;
	    border-bottom: 1px solid #d2cfc6;
	    margin-bottom: 20px;
	}
	.voucher ul li {
	    float: none;
	    width: 130px;
	    height: 125px;
	    padding: 10px 0;
	    display: inline-block;
	    margin: 0;
	}
	.voucher ul li button.movie-voucher {
    	background-position: 0px 0px !important;
	}
	.voucher ul li button.gift-card {
    	background-position: 0px -123px !important;
	}
	.voucher ul li button {
	    display: block;
	    width: 130px;
	    height: 20px;
	    padding-top: 100px;
	    background: url(/img/icon/icon-cate-voucher.png);
	    color: #222222;
	    font-size: 12px;
	    text-align: center;
	    font-weight: bold;
	    cursor: pointer;
	    border: none;
	}
	#detailmv{
		width: 100%;
    	margin-bottom: 20px;
	}
	#detailgc{
		width: 100%;
    	margin-bottom: 20px;
	}
	.gvoucher{
		margin: 10px 0px auto 25px;
	}
	.gvoucher img{
		width: 350px;
		height: 175px;
	}
	.gvoucher .detail{
		width: 350px;
		height: 80px;
	}
	.tabcontent{
		display: none;
	}
</style>