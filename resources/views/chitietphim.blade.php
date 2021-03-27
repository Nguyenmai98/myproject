@extends('layouts.default')
@section('content')
	<div class="container top1">
		<ul>
			<li><a href="/"><i class="fas fa-home"></i></a></li>
			<li><i class="fas fa-chevron-right"></i></li>
			<li style="margin-left: -10px">'EM' LÀ CỦA EM</li>
		</ul>
	</div>
	<div class="container">
		<h1>Nội dung phim</h1>
		<div class="noidung">
			<img src="{{asset('img/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}" style="float: left">
			<div class="chitiet">
				<h2>'EM' LÀ CỦA EM</h2>
				<hr>
				<p><span>Đạo diễn: </span>Lê Thiện Viễn</p>
				<p><span>Diễn viên: </span>Ngô Kiến Huy</p>
				<p><span>Thể loại: </span>Hài, tình cảm</p>
				<p><span>Khởi chiếu: </span>8/1/2021</p>
				<p><span>Thời lượng: </span>97 phút</p>
				<p><span>Ngôn ngữ: </span>Tiếng Việt</p>
				<p><span>Rated: C16 - CẤM KHÁN GIẢ DƯỚI 16 TUỔI</span></p>
				<a href="/muave"><button type="button" title="Mua vé" class="button btn-booking">
					<span><span>Mua vé</span></span>
				</button></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="chitietphim">
			<h1>Chi tiết phim</h1>
			<p>Chuyện phim “Em” Là Của Em xoay quanh Hoàng (Ngô Kiến Huy) - một chàng trai đã 30 tuổi nhưng vẫn chưa đi đến được trạm cuối của con đường tình yêu. Phải lòng một cô gái hơn tuổi từ tận năm cấp 3, Hoàng đã phải trải qua nhiều gian nan trắc trở để “cầm cưa” chị đẹp nhưng đều liên tiếp bị chị người thương từ chối. Lúc này, Thanh (Khả Như) trở thành người “cứu rỗi” tình yêu cho Hoàng khi lập ra cho anh hẳn một kế hoạch cưa đổ crush cực kỳ hoàn hảo. Liệu rằng với kế hoạch ấy, anh chàng có thành công thu phục trái tim của người đẹp giấu mặt? Câu trả lời sẽ được hé lộ vào ngày 08.01.2021.</p>
		</div>
		<div class="trailer">
			<h1>Trailer</h1>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/9m5HbGDFBrI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
	h1{
		font-size: 32px!important;
		padding-top: 10px;
		border-bottom: 1.6px solid black!important;
	}
	.noidung img{
		width: 181px;
		height: 268px;
	}
	.chitiet{
		padding-left: 200px;
	}
	.top1{
		background-color: #F1F0E5;
		height: 22px;
	}
	.top1 ul li{
		font-size: 15px;
		display: inline-block;
		padding-right: 3px;
	}
	.fa-home{
		margin-left: -40px;
	}
	.fa-chevron-right{
		margin-left: -20px;
	}
	span{
		font-weight: bold;
	}
	.btn-booking, .btn-booking:hover, .btn-booking:active, .btn-booking:focus {
	    background: none no-repeat scroll 0 0 #e71a0f;
	    border-radius: 5px;
	}
	.button, .cart-table .product-cart-actions .button, #co-shipping-method-form .buttons-set .button, .footer .button {
	    background: #e71a0f;
	    display: inline-block;
	    padding: 6px 2px;
	    border: 0;
	    color: #FFFFFF;
	    font-size: 13px;
	    font-weight: normal;
	    font-family: "Helvetica Neue", Verdana, Arial, sans-serif;
	    line-height: 19px;
	    text-align: center;
	    text-transform: uppercase;
	    vertical-align: middle;
	    white-space: nowrap;
	    margin-top: 10px;
	}
	.btn-booking > span, .btn-booking:hover > span, .btn-booking:active > span, .btn-booking:focus > span {
	    padding-left: 25px;
	    background: url(../img/bg-cate-booking.png) no-repeat scroll left center rgba(0, 0, 0, 0);
	    border-radius: 5px;
	}
</style>