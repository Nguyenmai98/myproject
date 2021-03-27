@extends('layouts.admin')
@section('contentadmin')
<div class="container-fluid">
  <div class="row"> 
    <div class="col-md-12">
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"> 
      @csrf
            <div class="form-group">
              <label>Tên phim</label>
              <input type="text" 
              class="form-control" name="name" placeholder="Nhập tên phim"
              value="{{ old('name') }}">
            </div>
            <div class="form-group">
              <label>Ảnh phim</label>
              <input type="file" class="form-control-file" name="feature_image_path">
            </div>
            <div class="form-group">
              <label>Đạo diễn</label>
              <input type="text" class="form-control" name="daodien"                   placeholder="Nhập tên đạo diễn"
              value="{{ old('daodien') }}">
            </div>
            <div class="form-group">
              <label>Diễn viên</label>
              <input type="text" class="form-control" name="dienvien" 
              placeholder="Nhập tên diễn viên"
              value="{{ old('dienvien') }}">
            </div>
            <div class="form-group">
              <label>Thể loại</label>
              <input type="text" 
              class="form-control" name="theloai" placeholder="Nhập tên thể loại"
              value="{{ old('theloai') }}">
            </div>
            <div class="form-group">
              <label>Khởi chiếu</label>
              <input type="text" 
              class="form-control" name="khoichieu" placeholder="Thời gian khởi chiếu"
              value="{{ old('khoichieu') }}">
            </div>
            <div class="form-group">
              <label>Thời lượng</label>
              <input type="text" 
              class="form-control" name="thoiluong" placeholder="Thời lượng phim"
              value="{{ old('thoiluong') }}">
            </div>
            <div class="form-group">
              <label>Ngôn ngữ</label>
              <input type="text" 
              class="form-control" name="ngonngu" placeholder="Ngôn ngữ phim"
              value="{{ old('ngonngu') }}">
            </div>
            <div class="form-group">
              <label>Rated</label>
              <input type="text" 
              class="form-control" name="rated" placeholder="Rated"
              value="{{ old('rated') }}">
            </div>
            <div class="form-group">
              <label>Trailer</label>
              <input type="text" 
              class="form-control" name="url" placeholder="Trailer"
              value="{{ old('url') }}">
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
                  <textarea class="form-control tinymce_editor_init" name="chitiet" rows="20">
                    {{ old('chitiet') }}
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
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<style type="text/css">
  .form-control, .form-control-file{
    font-size: 14px!important; 
    width: 600px!important;
    height: 40px!important;
  }
  .sidebar{
    height: 1300px!important;
  }
</style>
