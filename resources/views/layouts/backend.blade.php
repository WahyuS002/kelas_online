<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Kelas Online </title>
    
    @stack('style-before')
    @include('includes.backend.style')
    @stack('style-after')

</head>
<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    @include('includes.backend.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('includes.backend.sidebar')
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            @yield('content')

            @include('includes.backend.footer')
        </div>

    </div>
    <!-- END MAIN CONTAINER -->

    @stack('script-before')
    @include('includes.backend.script')
    @stack('script-after')

</body>
</html>