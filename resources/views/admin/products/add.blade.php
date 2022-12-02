@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row pt-3">
		<div class="col-md-6">
			<h4>{{($product) ? "Edit Product" : "Add Product"}}</h4>
		</div>
		<div class="col-md-6 text-end">
			<a class="btn btn-sm btn-secondary" href="{{url('/products')}}">Back</a>
		</div>
	</div>

	<form action="{{url('/products/store/'.$product_id)}}" method="POST">
		@csrf
		<div class="row pt-4">
			<div class="col-md-3 form-group pb-3">
				<label class="pb-1">Product Name</label>
				<input class="form-control" type="text" value="{{($product) ? $product->name : ''}}" name="product_name">
			</div>
			<div class="col-md-3 form-group pb-3">
				<label class="pb-1">Price</label>
				<input class="form-control" type="text" value="{{($product) ? $product->price : ''}}" name="price">
			</div>
			<div class="col-md-3 form-group pb-3">
				<label class="pb-1">Product Description</label>
				<textarea class="form-control" name="description">{{($product) ? $product->description: ''}}</textarea>
			</div>
		</div>
		<div class="text-center pt-5">
			<button class="btn btn-sm btn-info" type="submit">Submit</button>
		</div>
	</form>

</div>


@endsection