@extends('layouts.admin')
@section('contentadmin')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('sliders.create') }}" class="btn btn-success float-right m-2" style="font-size: 14px;">Add</a>
			</div>
			<div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên slider</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($sliders as $sliderItem)

                <tr>
                  <th scope="row">{{ $sliderItem->id }}</th>
                  <td>{{ $sliderItem->name }}</td>
                  <td>
                    <img class="product_image_150_100" src="{{ $sliderItem->image_path }}">
                  </td>
                  <td>
                    <a href="{{ route('sliders.edit', ['id' => $sliderItem->id]) }}" class="btn btn-default">Edit</a>
                    <a href="" 
                    data-url="{{ route('sliders.delete', ['id' => $sliderItem->id]) }}"
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
  .sidebar{
    height: 700px!important;
  }
  .product_image_150_100{
    width: 150px;
  }
</style>