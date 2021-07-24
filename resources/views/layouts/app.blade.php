<!doctype html>
<html lang="en">

<head>
    <title>Covid 19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.style')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        @include('includes.menu')



        @yield('content')
        

        @include('includes.footer')
        

    </div>

    </div> <!-- .site-wrap -->

    @include('includes.script')


</body>

</html>
