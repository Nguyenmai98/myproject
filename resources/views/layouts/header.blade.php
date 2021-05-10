<header id="header">
<div class="container">
		<!-- nav -->
		<div class="nav">
			<a href="/news"><img src="{{asset('/img/icon/icon_promotion25.png')}}">TIN MỚI & ƯU ĐÃI</a>
			<a href="/admin"><img src="{{asset('/img/icon/icon_ticket25.png')}}">VÉ CỦA TÔI</a>
			<a href="/admin"><img src="{{asset('/img/icon/icon_login25.png')}}">ĐĂNG NHẬP/ ĐĂNG KÝ</a>
		</div>
</div>
		<!-- NAVBAR -->

		<div class="navbar">
      <div class="container">
			<a href="/"><img src="{{asset('/img/icon/cgvlogo.png')}}" style="margin-left: -60px;"></a>
			<ul>
				<li>
        			<a class="menu1" href="#">PHIM</a>
        			<ul>
                @foreach($loai_phim as $loai)
          				<li><a class="menu2" href="{{ route('loaiphim', $loai->id) }}">{{ $loai->name }}</a></li>
                @endforeach
        			</ul>
      			</li>
            <li>
              <a class="menu1" href="/lichchieu">RẠP CGV</a>
            </li>
      			<li>
        			<a class="menu1" href="">THÀNH VIÊN</a>
              <ul>
                  <li><a class="menu2" href="/quyenloi">Quyền Lợi</a></li>
              </ul>
      			</li>
      			<li>
        			<a class="menu1" href="#">CULTUREFLEX</a>
        			<ul>
                  <li><a class="menu2" href="/quayonline">Quầy Online</a></li>
                  <li><a class="menu2" href="/groupsale">Sự Kiện & Vé Nhóm</a></li>
          				<li><a class="menu2" href="/e-cgv">E-CGV</a></li>
          				<li><a class="menu2" href="/menu">CGV Restaurant</a></li>
          				<li><a class="menu2" href="/gift-card">Thẻ Quà Tặng</a></li>
        			</ul>
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
    background: url(/img/icon/bg-top.png) repeat-x scroll left bottom transparent;
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