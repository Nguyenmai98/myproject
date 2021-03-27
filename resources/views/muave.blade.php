@extends('layouts.default')
@section('content')
	<div class="container">
		<h1>Ngày xem</h1>
		<div class="ngayxem">
			<ul class="toggle-tabs">
				<li class="current">
					<div class="day">
					<span>01</span>
					<em>Fre</em>
					<strong>29</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>01</span>
					<em>Sat</em>
					<strong>30</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>01</span>
					<em>Sun</em>
					<strong>31</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>02</span>
					<em>Mon</em>
					<strong>01</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>02</span>
					<em>Tue</em>
					<strong>02</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>03</span>
					<em>Wed</em>
					<strong>03</strong>
					</div>
				</li>
				<li>
					<div class="day">
					<span>01</span>
					<em>Thu</em>
					<strong>04</strong>
					</div>
				</li>
			</ul>
		</div>
		<h1>Giờ xem</h1>
		<div class="site sitecgv">
			<ul class="products-grid-movie tab-showtime">
				<li class="current">
					<p>15:50 PM</p>
				</li>
				<li class="item">
					<p>16:50 PM</p>
				</li>
				<li class="item">
					<p>18:30 PM</p>
				</li>
				<li class="item">
					<p>19:30 PM</p>
				</li>
				<li class="item">
					<p>20:40 PM</p>
				</li>
				<li class="item">
					<p>21:10 PM</p>
				</li>
			</ul>
		</div>
		<h1>Người/Ghế</h1>
		<div class="main-content">
			<div class="col-md-12">
				<div class="col-md-6">
					<p class="under"><b>Phòng chiếu</b></p>
						<div class="row">
							<div class="seat seat-standard active">A10</div>
							<div class="seat seat-standard active">A9</div>
							<div class="seat seat-standard active">A8</div>
							<div class="seat seat-standard active">A7</div>
							<div class="seat seat-standard active">A6</div>
							<div class="seat seat-standard active">A5</div>
							<div class="seat seat-standard active">A4</div>
							<div class="seat seat-standard active">A3</div>
							<div class="seat seat-standard active">A2</div>
							<div class="seat seat-standard active">A1</div>
						</div>
						<div class="row">
							<div class="seat seat-standard active">B10</div>
							<div class="seat seat-standard active">B9</div>
							<div class="seat seat-standard active">B8</div>
							<div class="seat seat-standard active">B7</div>
							<div class="seat seat-standard active">B6</div>
							<div class="seat seat-standard active">B5</div>
							<div class="seat seat-standard active">A10</div>
							<div class="seat seat-standard active">A10</div>
							<div class="seat seat-standard active">A10</div>
							<div class="seat seat-standard active">A10</div>
						</div>
						<div class="row">
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
						</div>
						<div class="row">
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
						</div>
						<div class="row">
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
						</div>
						<div class="row">
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
							<div class="seat seat-standard active" >A10</div>
						</div>
					</div>
					<div class="col-md-6">
						<p class="under"><b>Chú thích</b></p>
						<div class="iconlist">
							<p class="icon checked">Checked</p>
							<p class="icon occupied">Đã chọn</p>
							<p class="icon unavailable">Không thể chọn</p>
						</div>
							
						<div class="iconlist">
							<p class="icon zone-standard" title="Standard">Thường</p>
							<p class="icon zone-vipprime" title="VIP(Prime)">VIP(Prime)</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="datve">
					<a href=""><p style="color: white"><b>Đặt vé</b></p></a>
				</div>
			</div>
	</div>
@endsection
<style type="text/css">
	.toggle-tabs{
		padding: 20px;
    	margin: 0px;
	}
	ul.toggle-tabs{
	    display: flex;
	}
	.current{
		border: 2px solid #222;
    	border-radius: 5px;
	}
	.day{
		color: #717171;
	    cursor: pointer;
	    height: 48px;
	    position: relative;
	    width: 77px;
	}
	.day > span{
		color: #717171;
	    font-size: 11px;
	    left: 4px;
	    position: absolute;
	    top: 4px;
	}
	.day > em{
		color: #717171;
	    font-size: 11px;
	    font-style: normal;
	    left: 4px;
	    position: absolute;
	    top: 20px;
	}
	.day > strong{
		color: #717171;
	    font-size: 32px;
	    font-weight: normal;
	    left: 31px;
	    line-height: 32px;
	    position: absolute;
	    top: 8px;
	}
	.site.sitecgv {
	    display: inline-block;
	    width: 100%;
	    padding-bottom: 10px;
	    margin-bottom: 20px;
	}
	.products-grid-movie.tab-showtime {
	    margin-bottom: 15px;
	}
	.tab-showtime {
	    width: 100%;
	}
	.tab-showtime li.item {
	    border: 1px solid #cbcabe;
	    color: #222;
	    text-align: center;
	}
	.tab-showtime li {
	    border: 1px solid #222;
	    padding: 5px 10px;
	    float: left;
	    margin-right: 3px;
	    text-align: center;
	    margin-top: 3px;
	}
	.tab-showtime li {
	    width: 125px;
	}
	.tab-showtime li.item span {
	    color: #222;
	    clear: both;
	    float: left;
	    width: 100%;
	}
	.seat.active {
	    cursor: pointer;
	}
	.seat {
	    display: inline-block;
	    border: 1px solid #01c73c;
	    width: 22px;
	    height: 22px;
	    vertical-align: middle;
	    font-size: 7pt;
	    margin: 0 1px;
	    padding: 1px 0;
	}
	.under > p{
		margin-bottom: 10px;
	}
	.row{
		margin-left: 10px !important;
	}
	.icon.checked:before {
	    background: #b11500;
	}
	.icon:before {
	    content: "";
	    display: inline-block;
	    vertical-align: middle;
	    width: 18px;
	    height: 18px;
	    margin: 0 5px 0 0;
	}
	.icon.occupied:before {
	    background: #bbb;
	}
	.icon.unavailable:before {
	    background: #bbb;
	    content: "X";
	    text-align: center;
	    color: #fff;
	}
	.icon.zone-standard:before {
	    border: 1px solid #01c73c;
	}
	.icon.zone-vipprime:before {
	    border: 1px solid #f71708;
	}
	.datve{
		width: 100%;
		text-align: center;
		background-color: red;
		border: 1px solid white;
		border-radius: 5px;
		padding-top: 15px;
		padding-bottom: 15px;
		width: 200px;
		justify-content: center;
		margin-left: 400px;
	}
</style>