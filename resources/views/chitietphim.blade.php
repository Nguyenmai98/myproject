@extends('layouts.default')
@section('content')
	<div class="container">
		<h1>Nội dung phim</h1>
		<div class="noidung chung">
			<img src="{{ $products->feature_image_path }}" style="float: left">
			<div class="chitiet">
				<p class="tit">{{ $products->name }}</p>
				<hr>
				<p><span>Đạo diễn: </span>{{ $products->daodien }}</p>
				<p><span>Diễn viên: </span>{{ $products->dienvien }}</p>
				<p><span>Thể loại: </span>{{ $products->theloai }}</p>
				<p><span>Khởi chiếu: </span>{{ $products->khoichieu }}</p>
				<p><span>Thời lượng: </span>{{ $products->thoiluong }}</p>
				<p><span>Ngôn ngữ: </span>{{ $products->ngonngu }}</p>
				<p style="margin-bottom: 15px"><span>{{ $products->rated }}</span></p>
				<a href="/muave">Mua vé</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="chitietphim chung">
			<h1>Chi tiết phim</h1>
			<p style="margin-top: 10px;">{{ $products->chitiet }}</p>
		</div>
		<div class="trailer chung">
			<h1>Trailer</h1>
			<iframe style="margin-top: 10px; margin-bottom: 10px" width="650" height="350" 
			src="{{ $products->url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

@endsection
<style type="text/css">
	h1{
		font-size: 30px!important;
		border-bottom: 1.6px solid black!important;
	}
	.noidung img{
		width: 181px;
		height: 268px;
	}
	.chung{
		margin-top: 15px;
	}
	.chitiet{
		padding-left: 200px;
	}
	.chitiet a{
		background-color: red;
		color: white;
		padding: 10px;
		border-radius: 5px;
		text-transform: uppercase;
		border: 1px solid black;
	}
	.chitiet a:hover{
		color: white;
	}
	span{
		font-weight: bold;
	}
	.tit{
		font-size: 22px;
	}
</style>