<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('includes.frontend-2.style')

    <title>Beranda</title>
</head>
<body>

    <nav>
        @include('includes.frontend-2.navbar')
    </nav>

    @yield('outside-main')

    <!-- START KURSUS -->
    <main>
        @yield('inside-main')
    </main>
    <!-- END KURSUS -->

    @include('includes.frontend-2.footer')

</body>
</html>