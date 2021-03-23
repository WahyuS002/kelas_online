<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Cursus - Index</title>

		@include('includes.backend.style')

	</head>

<body>

	@include('includes.backend.navbar')

	@include('includes.backend.sidebar')

	<!-- Body Start -->
	<div class="wrapper">

		@yield('content')

		@include('includes.backend.footer')

	</div>
	<!-- Body End -->

	@include('includes.backend.script')

</body>
</html>

