@extends('admin.layout')

@section('content')

<div class="container-fluid">
	<div class="row pt-3">
		<div class="col-md-6">
			<h4>Products</h4>
		</div>
		<div class="col-md-6 text-end">
			<a class="btn btn-sm btn-primary" href="{{url('/products/add')}}">Add</a>
		</div>
	</div>
	<div class="row p-3">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Sn</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $key => $product)
				<tr>
					<td>{{$key + 1}}</td>
					<td>{{$product->name}}</td>
					<td>{{$product->price}}</td>
					<td>{{$product->description}}</td>
					<td>
						<a href="{{url('/products/add/'.$product->id)}}" class="btn btn-sm btn-success">Edit</a>
						<a href="{{url('/products/delete/'.$product->id)}}" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection