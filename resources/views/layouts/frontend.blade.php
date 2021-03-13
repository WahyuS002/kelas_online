<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Course Detail View</title>

    @include('includes.cursus.style')

</head>

<body>
    <!-- Video Modal Start -->
    @yield('modal')
    <!-- Video Modal End -->

    @include('includes.cursus.header')

    @include('includes.cursus.sidebar')

    <!-- Body Start -->
    <div class="wrapper _bg4586">

        @yield('content')

        @include('includes.cursus.footer')
    </div>
    <!-- Body End -->

    @include('includes.cursus.script')

</body>
</html>