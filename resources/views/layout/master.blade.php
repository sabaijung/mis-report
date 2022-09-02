<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>MIS REPORT</title>
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
	<script src="https://kit.fontawesome.com/e60fae2e49.js" crossorigin="anonymous"></script>
	@include('partials.styles')
</head>

<body id="page-top">
	<div id="wrapper">
		@include('partials.sidebar')
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				@include('partials.topbar')
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			@include('partials.footer')
		</div>
	</div>
	@include('partials.scripts')
	@stack('page-scripts')
</body>

</html>