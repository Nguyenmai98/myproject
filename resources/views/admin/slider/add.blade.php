@extends('layouts.admin')
@section('contentadmin')
<div class="container-fluid">
  <div class="row"> 
    <div class="col-md-12">
    <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data"> 
      @csrf
            <div class="form-group">
              <label>Tên slider</label>
              <input type="text" 
              class="form-control" name="name" placeholder="Nhập tên slider"
              value="{{ old('name') }}">
            </div>
            <div class="form-group">
              <label>Ảnh slider</label>
              <input type="file" class="form-control-file" name="image_path">
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
  .sidebar{
    height: 1300px!important;
  }
</style>
