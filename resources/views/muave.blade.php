@extends('layouts.default')
@section('content')
<div class="main1">
	<button class="tablink" onclick="openPage('thu7')" id="defaultOpen">
		<p class="thu">Thứ 7</p>
		<p>24/04</p>
	</button>
	<button class="tablink" onclick="openPage('chunhat')">
		<p class="thu">Chủ nhật</p>
		<p>24/04</p>
	</button>
	<button class="tablink" onclick="openPage('thu2')">
		<p class="thu">Thứ 2</p>
		<p>24/04</p></button>
	<button class="tablink" onclick="openPage('thu3')">
		<p class="thu">Thứ 3</p>
		<p>24/04</p>
	</button>
	<button class="tablink" onclick="openPage('thu4')">
		<p class="thu">Thứ 4</p>
		<p>24/04</p>
	</button>
	<button class="tablink" onclick="openPage('thu5')">
		<p class="thu">Thứ 5</p>
		<p>24/04</p>
	</button>
	<button class="tablink" onclick="openPage('thu6')">
		<p class="thu">Thứ 6</p>
		<p>24/04</p>
	</button>

	<div id="thu7" class="tabcontent">
		<div class="row tgphim">
		<div class="col-md-4"  style="border-right: 1px solid black;">
			<div class="col-xs-4 col-sm-12 col-lg-5">
				<img src="{{asset('img/phim/zombie_mansion_-_vietnam_-_poster_revised_1__1.jpg')}}">
			</div>
			<div class="col-xs-8 col-sm-12 col-lg-7 tit1">
				<p class="tit">DINH THỰ XÁC SỐNG</p>
			</div>
		</div>
		<div class="col-md-8 type2d">
			<a href="" class="btn-schedule">18:50</a>
			<a href="" class="btn-schedule">19:50</a>
		</div>
	</div>
	</div>

	<div id="chunhat" class="tabcontent">
	  <h3>News</h3>
	  <p>Some news this fine day!</p> 
	</div>

	<div id="thu2" class="tabcontent">
	  <h3>Contact</h3>
	  <p>Get in touch, or swing by for a cup of coffee.</p>
	</div>

	<div id="thu3" class="tabcontent">
	  <h3>About</h3>
	  <p>Who we are and what we do.</p>
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
	.main1{
		border: 1px solid black;
	  	margin-left: 200px;
	  	width: 983px;
	}
	.tablink {
	  background-color: #555;
	  color: white;
	  float: left;
	  border: 1px solid white;
	  cursor: pointer;
	  padding: 10px;
	  font-size: 17px;
	  width: 140px;
	}

	.tablink:hover {
	  background-color: #777;
	}

	/* Style the tab content (and add height:100% for full page content) */
	.tabcontent {
	  display: none;
	  padding: 30px 20px;
	}
	.tabcontent img{
		width: 108px;
		height: 162px;
	}
	.type2d{
		background-image: url(/img/2d.png);
		background-position: left 15px center;
	    background-repeat: no-repeat;
	    padding: 60px 10px 10px 60px;
	    margin: 10px 0px;
	}
	.btn-schedule{
		margin-left: 50px;
		padding: 10px;
		border: 1px solid black;
	}
	.tit1{
		padding-top: 60px;
	}
	.tgphim{
		padding-top: 30px;
	}
</style>