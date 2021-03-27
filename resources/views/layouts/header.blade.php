<header id="header">
<div class="container">
		<!-- nav -->
		<div class="nav">
			<a href="/news"><img src="{{asset('/img/icon_promotion25.png')}}">TIN MỚI & ƯU ĐÃI</a>
			<a href=""><img src="{{asset('/img/icon_ticket25.png')}}">VÉ CỦA TÔI</a>
			<a href="/admin"><img src="{{asset('/img/icon_login25.png')}}">ĐĂNG NHẬP/ ĐĂNG KÝ</a>
		</div>
</div>
		<!-- NAVBAR -->

		<div class="navbar">
      <div class="container">
			<a href="/"><img src="{{asset('/img/cgvlogo.png')}}"></a>
			<ul>
				<li>
        			<a class="menu1" href="#">PHIM</a>
        			<ul>
          				<li><a class="menu2" href="/phimdangchieu">Phim Đang Chiếu</a></li>
          				<li><a class="menu2" href="/phimsapchieu">Phim Sắp Chiếu</a></li>
        			</ul>
      			</li>
            <li>
              <a class="menu1" href="">GIỚI THIỆU</a>
            </li>
      			<li>
        			<a class="menu1" href="">THÀNH VIÊN</a>
      			</li>
      			<li>
        			<a class="menu1" href="#">CULTUREFLEX</a>
        			<ul>
          				<li><a class="menu2" href="/groupsale">Sự Kiện & Vé Nhóm</a></li>
          				<li><a class="menu2" href="/menu">CGV Restaurant</a></li>
          				<li><a class="menu2" href="gift-card">Thẻ Quà Tặng</a></li>
        			</ul>
      			</li>
            <li>
              <a class="menu1" href="">LIÊN HỆ</a>
            </li>
			</ul>
  </div>
</div>
</header>
<style type="text/css">
  .top img{
    width: 100%;
  }
  .nav{
    float: right;
    clear: both;
  }
  .nav a{
    margin: 5px;
    padding: 5px;
  }
  .navbar{
    background: url(/img/bg-top.png) repeat-x scroll left bottom transparent;
    background-size: 10px 135px;
    height: 135px;
    z-index: 1;
  }
  .navbar ul{
    display: flex;
  }
  .navbar ul li{
    list-style: none;
  }
  .menu1{
    padding: 5px 15px;
  }
  .menu2{
    padding: 5px;
  }
  .menu2:hover{
    color: red;
  }
  .navbar ul li a{
    font-weight: bold;
    display: block;
    text-decoration: none;
  }
  .navbar li ul{
    display: none;
    position: absolute;
    background-color: black;
    color: white;
    border: 2px solid red;
  }
  .navbar  li:hover > ul{
    display:  block;
  
}
}
</style>