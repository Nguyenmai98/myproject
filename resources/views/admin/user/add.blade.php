@extends('layouts.admin')
@section('contentadmin')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"> 
              @csrf
            <div class="form-group">
              <label>Tên</label>
              <input type="text" 
              class="form-control" 
              name="name" 
              placeholder="Nhập tên"
              value="{{ old('name') }}">
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" 
              class="form-control" 
              name="email" 
              placeholder="Nhập email"
              value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" 
              class="form-control" 
              name="password" 
              placeholder="Nhập mật khẩu">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
                      
    </div>
  </div>
@endsection 
<style type="text/css">
  .form-control{
    font-size: 14px!important; 
    width: 600px!important;
    height: 40px!important;
  }
</style>
