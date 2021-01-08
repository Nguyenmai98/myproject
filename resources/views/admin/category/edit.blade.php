@extends('layouts.admin')
@section('contentadmin')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post"> 
          @csrf
        <div class="form-group">
          <label>Tên danh mục</label>
          <input type="text" class="form-control" name="name" value="{{ $category->name }}" style="font-size: 14px; height: 40px" placeholder="Nhập tên danh mục">
          <div class="form-group">
            <label>Chọn danh mục cha</label>
            <select class="form-control" name="parent_id" style="font-size: 14px; height: 40px">
              <option value="0" style="font-size: 14px; height: 40px">Chọn danh mục cha</option>
              {!! $htmlOption !!}
            </select>
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary" style="font-size: 14px; height: 40px">Submit</button>
      </form>  
      </div>
                      
    </div>
  </div>
@endsection