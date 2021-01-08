@extends('layouts.default')
@section('content')
	<div class="container">
		<div class="gift-card-1">
			<img src="{{asset('img/gift/gift-card-1.png')}}">
		</div>
		<div class="gift-card-2">
			<h3><b>THẺ QUÀ TẶNG</b></h3>
			<p>CGV hân hạnh phát hành Thẻ Quà Tặng - Phương tiện thanh toán hiện đại và thuận tiện. Đây là một món quà điện ảnh tuyệt vời mà bạn có thể chia sẻ và gửi tặng bạn bè, gia đình, đồng nghiệp và đối tác. Chắc chắn đây sẽ là món quà ngập tràn sắc màu điện ảnh thật ý nghĩa và tuyệt vời dành cho những người bạn yêu quý.</p>
			<p><b>Thẻ Quà Tặng CGV</b> là loại thẻ trả trước. Với số tiền trong thẻ, bạn có thể sử dụng Thẻ để đổi vé xem phim hoặc bất kì sản phẩm nào tại quầy Bắp Nước của <b>CGV Cinemas</b>.Với vẻ ngoài sang trọng và sự tiện lợi, bạn có thể lựa chọn các mệnh giá cho Thẻ Quà Tặng như 300.000đ; 500.000đ; hoặc 1.000.000đ. Thẻ có thời hạn sử dụng trong 1 năm và đặc biệt bạn có thể nạp thêm tiền để gia hạn bất cứ lúc nào. Bạn có thể mua thẻ thật dễ dàng mà không cần đăng ký thông tin chủ thẻ.</p>
		</div>
		<div class="gift-card-3">
			<div class="col-md-5">
				<img src="{{asset('img/gift/gift-card-2.png')}}">
			</div>
			<div class="col-md-7">
			<ul>
				<li><p><b>Thẻ Quà Tặng CGV</b> là loại thẻ trả trước. Với số tiền trong thẻ, bạn có thể sử dụng Thẻ để đổi vé xem phim hoặc bất kì sản phẩm nào tại quầy Bắp Nước của <b>CGV Cinemas</b>.</p></li>
				<li><p>Với vẻ ngoài sang trọng và sự tiện lợi, bạn có thể lựa chọn các mệnh giá cho Thẻ Quà Tặng như 300.000đ; 500.000đ; hoặc 1.000.000đ. Thẻ có thời hạn sử dụng trong 1 năm và đặc biệt bạn có thể nạp thêm tiền để gia hạn bất cứ lúc nào. Bạn có thể mua thẻ thật dễ dàng mà không cần đăng ký thông tin chủ thẻ.</p></li>
				<li><p>Thẻ quà tặng đang được bán tại quầy vé các rạp <b>CGV Cinemas</b> trên toàn quốc, hoặc bạn có thể mua thẻ quà tặng điện tử tại <a href="" style="color: red">đây</a>. Thẻ quà tặng có thể được tích hợp vào tài khoản thành viên, và thanh toán tiện lợi bằng thẻ thành viên khi không mang theo thẻ quà tặng.</p></li>
				<li><p>Hiện có loại thẻ quà tặng cho công ty / tổ chức khi bạn mua vé với số lượng lớn. Đặc biệt bạn có thể đưa logo và thông điệp của công ty / tổ chức vào thẻ. Gọi bộ phận Bán Vé Nhóm (Group Sales) để biết thêm thông tin: <b>+84-8-3822-0333</b></p></li>
				<li><p>Các câu hỏi thường gặp, vui lòng <a href="" style="color: red">xem ở đây</a>.</p></li>
			</ul>
		</div>
		</div>
		<div class="gift-card-4">
			<div class="col-md-10">
				<h3><b>ĐIỀU KIỆN ÁP DỤNG</b></h3>
				<ul>
					<li><p>Thẻ này dùng để đổi vé xem phim hoặc thức ăn, đồ uống tại tất cả các rạp CGV, áp dụng tại quầy & trực tuyến.</p></li>

					<li><p>Thẻ có thẻ được nạp thêm tiền và gia hạn tại quầy hoặc trực tuyến bất cứ lúc nào với số tiền tối thiểu 300,000đ.</p></li>

					<li><p>Riêng với thẻ quà tặng được đăng ký trực tuyến, ngày hết hạn của tất cả thẻ trước đó sẽ được gia hạn theo ngày hết hạn của thẻ mới nhất.</p></li>
					<li><p>Thẻ có giá trị tích lũy điểm và tổng chi tiêu cho người sử dụng, không có giá trị tích lũy điểm và tổng chi tiêu cho người mua.</p></li>

					<li><p>Thẻ không được dùng để đổi sang tiền mặt hoặc mua thẻ khác.</p></li>

					<li><p>Nếu thẻ bị mất hoặc hư hại, giá trị sử dụng sẽ không còn hiệu lực hay cấp lại nếu không có bằng chứng xác thực hợp lệ nào.</p></li>
				</ul>
			</div>
			<div class="col-md-2">
				<img src="{{asset('img/gift/gift-card-3.png')}}">
			</div>
		</div>
	</div>
@endsection
<style type="text/css">
	.gift-card-1 img{
		max-width: 100%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.gift-card-3{
		margin-top: 10px;
	}
	.gift-card-3 ul li{
		list-style: circle;
	}
	.gift-card-4 ul li{
		list-style: circle;
	}
	.gift-card-4{
		padding-bottom: 250px;
	}
</style>