@extends('admin.layout')

@section('content')

<div class="row" style="padding-top: 10px;">
	<div class="col-md-3" style="text-align: left;">
		<h4>Products</h4>
	</div>
	<div class="col-md-9" style="text-align: right;">
		<a href="{{url('/product/add-product')}}" class="btn btn-primary">Add</a>
	</div>
</div>

@endsection