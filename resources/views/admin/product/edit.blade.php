@extends('layouts.admin')
@section('contentadmin')
<div class="container-fluid">
  <div class="row"> 
    <div class="col-md-12">
    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data"> 
      @csrf
            <div class="form-group">
              <label>Tên phim</label>
              <input type="text" 
              class="form-control" name="name" placeholder="Nhập tên phim"
              value="{{ $product->name }}">
            </div>
            <div class="form-group">
              <label>Ảnh phim</label>
              <input type="file" class="form-control-file" name="feature_image_path">
              <div class="col-md-12">
                <div class="row">
                  <img class="product_img_150_100" src="{{ $product->feature_image_path }}">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Đạo diễn</label>
              <input type="text" class="form-control" name="daodien"                   
              placeholder="Nhập tên đạo diễn"
              value="{{ $product->daodien }}">
            </div>
            <div class="form-group">
              <label>Diễn viên</label>
              <input type="text" class="form-control" name="dienvien" 
              placeholder="Nhập tên diễn viên"
              value="{{ $product->dienvien }}">
            </div>
            <div class="form-group">
              <label>Thể loại</label>
              <input type="text" 
              class="form-control" name="theloai" placeholder="Nhập tên thể loại"
              value="{{ $product->theloai }}">
            </div>
            <div class="form-group">
              <label>Khởi chiếu</label>
              <input type="text" 
              class="form-control" name="khoichieu" placeholder="Thời gian khởi chiếu"
              value="{{ $product->khoichieu }}">
            </div>
            <div class="form-group">
              <label>Thời lượng</label>
              <input type="text" 
              class="form-control" name="thoiluong" placeholder="Thời lượng phim"
              value="{{ $product->thoiluong }}">
            </div>
            <div class="form-group">
              <label>Ngôn ngữ</label>
              <input type="text" 
              class="form-control" name="ngonngu" placeholder="Ngôn ngữ phim"
              value="{{ $product->ngonngu }}">
            </div>
            <div class="form-group">
              <label>Rated</label>
              <input type="text" 
              class="form-control" name="rated" placeholder="Rated"
              value="{{ $product->rated }}">
            </div>
            <div class="form-group">
              <label>Trailer</label>
              <input type="text" 
              class="form-control" name="url" placeholder="Trailer"
              value="{{ $product->url }}">
            </div>
              <div class="form-group">
                <label>Chọn danh mục</label>
                <select class="form-control" name="category_id">
                  <option value="">Chọn danh mục</option>
                  {!! $htmlOption !!}
                </select>
              </div>
               <div class="col-md-12">
                  <div class="form-group">
                  <label>Chi tiết phim</label>
                  <textarea class="form-control" name="chitiet" rows="20">
                    {{ $product->chitiet }}
                  </textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
      </div>
    </div>
  </div>
@endsection 
<style type="text/css">
  .form-control, .form-control-file{
    font-size: 14px!important; 
    width: 600px!important;
    height: 40px!important;
  }
  .product_img_150_100{
    width: 150px;
  }
</style>
