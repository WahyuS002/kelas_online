<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Cursus - About Us</title>

		@include('includes.cursus.style')

	</head>

<body>

    @include('includes.cursus.header')

	<!-- Body Start -->
	<div class="wrapper _bg4586 _new89">

        @yield('content')

		@include('includes.cursus.footer')
	</div>
	<!-- Body End -->

	@include('includes.cursus.script')

</body>
</html>