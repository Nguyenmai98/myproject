@extends('layouts.default')
@section('content')
	<div class="container">
		<div class="top-group">
			<img src="{{asset('img/group/gs-vn.png')}}">
		</div>
		<div class="content1-group">
			<p>Bạn đang tìm giải pháp quảng cáo độc đáo để tăng doanh thu cho công ty?</p>
			<p>Bạn muốn gửi quà tặng có ý nghĩa đến đối tác thay cho lời cảm ơn về mối hợp tác lâu bền?</p>
			<p>Bạn muốn thưởng thức những bộ phim bom tấn thật riêng tư cùng bạn bè, người thân hay đồng nghiệp?</p>
			<p class="p1">Với kinh nghiệm dẫn đầu trong việc tổ chức sự kiện chiếu phim trong không gian riêng biệt, cung cấp vé xem phim hoặc thẻ quà tặng với số lượng lớn cho doanh nghiệp, chúng tôi tự hào sẽ mang đến cho đối tác những giải pháp điện ảnh chuyên nghiệp.</p>
		</div>
		<div class="top-group">
			<img src="{{asset('img/group/gs-our-service-vn.png')}}">
		</div>
		<div class="content2-group">
			<div class="content2-top-group">
				<ul>
					<li class="active">
						<button class="group-sale-1 tablink" onclick="openPage('dangoai')" 
						id="defaultOpen"></button>
					</li>
					<li>
						<button class="group-sale-2 tablink" onclick="openPage('tiectung')"></button>
					</li>
					<li>
						<button class="group-sale-3 tablink" onclick="openPage('quatang')"></button>
					</li>
					<li>
						<button class="group-sale-4 tablink" onclick="openPage('voucher')"></button>
					</li>
					<li>
						<button class="group-sale-5 tablink" onclick="openPage('khuyenmai')"></button>
					</li>
					<li>
						<button class="group-sale-6 tablink" onclick="openPage('chude')"></button>
					</li>
				</ul>
			</div>
			<div class="tabcontent" id="dangoai">
				<div class="text">
					<p><b>Học mà chơi tại rạp chiếu phim</b></p>
					<p>Gửi lời đến những thầy cô giáo đầy nhiệt huyết, bạn muốn áp dụng một phương pháp giảng dạy đột phá để tăng hưng phấn cho học sinh, hãy đăng ký ngay một lớp dã ngoại tại CGV để lưu lại những phút giây học đường khó quên nhé!</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/Education-01.jpg')}}">
				</div>
			</div>
			<div class="tabcontent" id="tiectung">
				<div class="text">
					<p><b>Tiệc điện ảnh tại CGV!</b></p>
					<p>Hãy để CGV giúp bạn tổ chức những buổi tiệc hay sự kiện đặc biệt! Bất kể là một buổi xem phim thân mật, hay một sự kiện, hay một buổi lễ cầu hôn, CGV là lựa chọn hàng đầu dành cho bạn. Cùng xem qua các <span style="color: red">ý tưởng sáng tạo</span> tại CGV nhé!</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/Celebration.jpg')}}">
				</div>
			</div>
			<div class="tabcontent" id="quatang">
				<div class="text">
					<p><b>Món quà sang trọng và ý nghĩa</b></p>
					<p>Là một phương tiện thanh toán hiện đại và thuận tiện, thẻ quà tặng trả trước sẽ là một món quà ngập tràn sắc màu điện ảnh nhưng cũng không kém phần giá trị mà bạn có thể chia sẻ và gửi tặng bạn bè, gia đình, đồng nghiệp và đối tác.</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/group-sale-test.png')}}">
				</div>
			</div>
			<div class="tabcontent" id="voucher">
				<div class="text">
					<p><b>Chi phí marketing hợp lí</b></p>
					<p>Với mọi ngân sách marketing, sự kiện hay hội nghị, chúng tôi đều sẽ dành cho bạn mức giá hợp lý nhất cùng mức chiết khấu cao nhất. Với thời hạn sử dụng dài cũng như khả năng quy đổi linh hoạt, khách hàng của bạn sẽ vô cùng hài lòng với món quà đặc biệt này.</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/Voucher.jpg')}}">
				</div>
			</div>
			<div class="tabcontent" id="khuyenmai">
				<div class="text">
					<p><b>Mua 2 Tặng 1? Thật dễ dàng.</b></p>
					<p>Bạn muốn tự thiết kế khuyến mãi dành riêng cho bạn? Hãy cùng chúng tôi thực hiện điều đó, từ thời gian khuyến mãi đến thể lệ ưu đãi, bạn sẽ có riêng một chương trình đặc biệt với CGV là phần thưởng hấp dẫn không thể cưỡng lại với mọi khách hàng.</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/Promotion.jpg')}}">
				</div>
			</div>
			<div class="tabcontent" id="chude">
				<div class="text">
					<p><b>Sáng tạo phong cách</b></p>
					<p>Đến với CGV bạn có thể đi với bất kỳ chủ đề nào mình mong muốn để thu hút mọi nhóm đối tượng, từ các cặp đôi nhân dịp Lễ Tình Nhân, hay các gia đình vào mùa Giáng Sinh, đến các cô gái xinh đẹp nhân ngày Quốc Tế Phụ Nữ, tất cả sẽ luôn cảm thấy tươi mới và phấn khích với không khí lễ hội tại CGV.</p>
				</div>
				<div class="img-content">
					<img src="{{asset('img/group/Theme.jpg')}}">
				</div>
			</div>
		</div>
		<div class="top-group">
			<img src="{{asset('img/group/gs-discuss-vn.png')}}">
		</div>
		<div class="content3-group">
			<p>Gửi yêu cầu của bạn cho bộ phận Group Sales, chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.</p>
			<img src="{{asset('img/group/gs-footer-contact-en.png')}}">
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
	.top-group img{
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-top: 20px;
	}
	.content1-group{
		float: left;
	    width: 100%;
	    background: url(../img/group/gs-icon-vourcher.png) no-repeat scroll left top transparent;
	    margin-top: 10px;
	    padding-left: 265px;
	}
	.p1{
		background: url(../img/group/gs-contact-vn.png) no-repeat scroll right top transparent;
	    background-size: 150px 115px;
	    float: left;
	    width: 100%;
	    padding-right: 150px;
	    height: 130px;
	}
	.content2-top-group{
		margin-top: 20px;
	}
	.content2-top-group ul li button {
	    background: url(/img/group/gs-icon-style-vn.png) no-repeat;
	    cursor: pointer;
	    border: none;
	    width: 140px;
	    height: 100px;
	    display: inline-block;
	}
	.content2-top-group ul{
		float: left;
	    width: 100%;
	    border-bottom: 1px solid #222;
	    padding-bottom: 7px;
	}
	.content2-top-group li{
		display: inline-table;
	    margin: 0 -3px 0px 0;
	    border-right: 1px solid #222;
	    text-align: center;
	    cursor: pointer;
	    float: none;
	    width: 16%;
	    height: 100px;
	    background: none !important;
	    border-left: none;
	    border-top: none;
	    border-bottom: none;
	}
	.content2-top-group ul li button.group-sale-1 {
    	background-position: -21px -8px !important;
	}
	.content2-top-group ul li button.group-sale-2 {
    	background-position: -145px -8px !important;
	}
	.content2-top-group ul li button.group-sale-3 {
    	background-position: -281px -3px !important;
	}
	.content2-top-group ul li button.group-sale-4 {
    	background-position: -418px -12px !important;
	}
	.content2-top-group ul li button.group-sale-5 {
    	background-position: -552px -6px !important;
	}
	.content2-top-group ul li button.group-sale-6 {
    	background-position: -700px -6px !important;
	}
	.content3-group{
		margin-bottom: 20px;
	}
	.content3-group p{
		text-align: center
	}
	.content3-group img{
		display: block;
		margin: auto;
	}
	.text{
		width: 55%;
		float: left;
	}
	.img-content img{
		width: 398px;
		height: 239.02px;
		margin-left: 20px;
	}
</style>