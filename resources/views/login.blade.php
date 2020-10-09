@extends('layouts.default')
@section('content')	
<div class="container login">
	<div class="col-md-12">
		<div class="col-md-6">
			<button class="tablink" onclick="openPage('Login')" id="defaultOpen">Đăng nhập</button>
			<button class="tablink" onclick="openPage('Signup')">Đăng ký</button>
			<div id="Login" class="tabcontent">
			  <p style="padding-top: 45px"><b>Email hoặc số điện thoại</b></p>
			  <input type="text" name="email" placeholder="Email hoặc số điện thoại">
			  <p><b>Mật khẩu</b></p>
			  <input type="password" name="password" placeholder="Mật khẩu">
			  <p><b>Vui lòng nhập ký tự bên dưới <span style="color: red">*</span></b></p>
			  <input type="text" name="capcha">
			  <div class="capcha">
			  	<img class="capcha-reload" src="img/reload.png">
			  	<img class="capcha-content" src="img/02c27c08b2b87328629e737f9492d5b5.png">
			  </div>
			  <input type="submit" class="submit" value="Đăng nhập">
			  <p><a href="">Bạn muốn tìm lại mật khẩu?</a></p>
			</div>

			<div id="Signup" class="tabcontent">
			  <p style="padding-top: 45px"><b>Tên <span style="color: red">*</span></b></p>
			  <input type="text" name="name" placeholder="Tên">
			  <p><b>Số điện thoại <span style="color: red">*</span></b></p>
			  <input type="text" name="numberphone" placeholder="Số điện thoại">
			  <p><b>Email <span style="color: red">*</span></b></p>
			  <input type="email" name="email" placeholder="Email">
			  <p><b>Mật khẩu <span style="color: red">*</span></b></p>
			  <input type="password" name="password" placeholder="Mật khẩu">
			  <p><b>Ngày sinh <span style="color: red">*</span></b></p>
			  <select>
			  	<option value="">Ngày</option>
			  	<option value="01">01</option>
			  	<option value="02">02</option>
			  	<option value="03">03</option>
			  	<option value="04">04</option>
			  	<option value="05">05</option>
			  	<option value="06">06</option>
			  	<option value="07">07</option>
			  	<option value="08">08</option>
			  	<option value="09">09</option>
			  	<option value="10">10</option>
			  	<option value="11">11</option>
			  	<option value="12">12</option>
			  	<option value="13">13</option>
			  	<option value="14">14</option>
			  	<option value="15">15</option>
			  	<option value="16">16</option>
			  	<option value="17">17</option>
			  	<option value="18">18</option>
			  	<option value="19">19</option>
			  	<option value="20">20</option>
			  	<option value="21">21</option>
			  	<option value="22">22</option>
			  	<option value="23">23</option>
			  	<option value="24">24</option>
			  	<option value="25">25</option>
			  	<option value="26">26</option>
			  	<option value="27">27</option>
			  	<option value="28">28</option>
			  	<option value="29">29</option>
			  	<option value="30">30</option>
			  	<option value="31">31</option>
			  </select>
			  <select>
			  	<option value="">Tháng</option>
			  	<option value="01">01</option>
			  	<option value="02">02</option>
			  	<option value="03">03</option>
			  	<option value="04">04</option>
			  	<option value="05">05</option>
			  	<option value="06">06</option>
			  	<option value="07">07</option>
			  	<option value="08">08</option>
			  	<option value="09">09</option>
			  	<option value="10">10</option>
			  	<option value="11">11</option>
			  	<option value="12">12</option>
			  </select>
			  <select>
			  	<option value="">Năm</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>                       
              </select>
              <p><b>Giới tính <span style="color: red">*</span></b></p>
              <input type="radio" id="male" name="gender" value="male">
			  <label for="male">Nam</label>
			  <input type="radio" id="female" name="gender" value="female">
			  <label for="female">Nữ</label>
              
			  <p><b>Vui lòng nhập ký tự bên dưới <span style="color: red">*</span></b></p>
			  <input type="text" name="capcha">
			  <div class="capcha">
			  	<img class="capcha-reload" src="img/reload.png">
			  	<img class="capcha-content" src="img/02c27c08b2b87328629e737f9492d5b5.png">
			  </div>
			  <label class="pro">
			  	<input type="checkbox" checked="checked"><b>Tôi đồng ý với <span style="color: red">Điều khoản sử dụng của CGV</span></b>
			  </label><br>
			  <input type="submit" class="submit" value="Đăng ký">
			</div>
		</div>
		<script>
		function openPage(pageName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  
		  document.getElementById(pageName).style.display = "block";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		</script>
		<div class="col-md-6">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="img/1.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>
@endsection
<style type="text/css">
	.capcha{
		position: relative;
	}
	.capcha img{
		margin: 10px 0px 10px 0px;
	}
	.capcha-reload {
	    position: absolute;
	}
	.capcha-content {
	    border: 1px solid #b6b6b6;
	}
	* {box-sizing: border-box}

	/* Set height of body and the document to 100% */
	body, html {
	  height: 100%;
	  margin: 0;
	  font-family: Arial;
	}

	/* Style tab links */
	.tablink {
	  background-color: red;
	  color: white;
	  float: left;
	  border: none;
	  outline: none;
	  cursor: pointer;
	  padding: 14px 16px;
	  font-size: 17px;
	  width: 50%;
	}

	.tablink:hover {
	  background-color: #777;
	}

	/* Style the tab content (and add height:100% for full page content) */
	.tabcontent {
	  display: none;
	  padding-top: 15px;
	}
	.submit{
		background-color: red;
		width: 100%;
		color: white;
		font-size: 17px;
		padding: 14px 16px;
	}
	input[type="text"], input[type="password"], input[type="email"] {
       	font-size:15px;
       	width: 100%;
	    padding: 10px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 2px;
	    box-sizing: border-box;
	}
	.login p, .login label{
		padding: 10px 0px 10px 0px;
		font-size: 15px;
	}
	select{
		width: 20%;
		padding: 10px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 2px;
	    box-sizing: border-box;
	}
	select, option{
		font-size: 14px;
	}
</style>