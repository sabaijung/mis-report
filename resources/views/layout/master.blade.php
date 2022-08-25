<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>MIS REPORT</title>
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
</body>

</html>