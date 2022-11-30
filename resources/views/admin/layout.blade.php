<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arqi</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/global/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/sidebar.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/custom.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	@include('admin.page_header')

	<div class="container-fluid p-0">
		<div class="row m-0">
			<div class="col-md-3 p-0">
				@include('admin.sidebar')
			</div>
			<div class="col-md-9">
				@yield('content')
			</div>
		</div>
	</div>

	@include('admin.footer')

	<script type="text/javascript" src="{{url('assets/admin/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/admin/js/custom.js')}}"></script>

</body>

</html>

