<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
   @include('partials/head')
</head>

<body>
    <!-- inner banner -->
    <div class="inner-banner-agile">
        <!-- header -->
        <header>
            <!-- logo -->
            <div class="logo_wthree">
                <a href="{{url('')}}">
                    <i class="fab fa-node-js"></i>
                </a>
            </div>
            <!-- //logo -->
        </header>
        <!-- //header -->
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    @yield('content')
    <!-- //contact -->
    <!-- footer -->
    <footer>
        <div class="cpy-right text-center py-4">
            <p class="text-white">© 2018 Strive. All rights reserved | Design by
                <a href="http://w3layouts.com"> W3layouts.</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
    <!-- js -->
    <script src="{{url('')}}/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- few java snippets-->
    <script src="{{url('')}}/js/strive.js"></script>
    <!-- //few java snippets-->
    <!-- nav -->
    <script src="{{url('')}}/js/menuFullpage.min.js"></script>
    <!-- //nav -->
    <!-- smooth scroll -->
    <script src="{{url('')}}/js/SmoothScroll.min.js "></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('')}}/js/bootstrap.js"></script>

    <script src="{{url('')}}/js/lightbox.js"></script>

</body>

</html>