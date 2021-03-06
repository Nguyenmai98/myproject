@extends('layouts.admin')
@section('contentadmin')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('products.create') }}" class="btn btn-success float-right m-2" style="font-size: 14px;">Add</a>
			</div>
			<div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên phim</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Đạo diễn</th>
                  <th scope="col">Thể loại</th>
                  <th scope="col">Danh mục phim</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($products as $productItem)

                <tr>
                  <th scope="row">{{ $productItem->id }}</th>
                  <td>{{ $productItem->name }}</td>
                  <td>
                    <img class="product_image_150_100" src="{{ $productItem->feature_image_path }}">
                  </td>
                  <td>{{ $productItem->daodien }}</td>
                  <td>{{ $productItem->theloai }}</td>
                  <td>{{ optional($productItem->category)->name }}</td>
                  <td>
                    <a href="{{ route('products.edit', ['id' => $productItem->id]) }}" class="btn btn-default">Edit</a>
                    <a href="" 
                    data-url="{{ route('products.delete', ['id' => $productItem->id]) }}"
                    class="btn btn-danger action_delete">Delete</a>
                  </td>
                </tr>
                @endforeach 
              </tbody>
            </table>
          </div>
		</div>
	</div>
@endsection	
@section('js')
<script src="{{ asset('admins/list.js') }}"></script>
@endsection
<style type="text/css">
  .product_image_150_100{
    width: 150px;
  }
</style>