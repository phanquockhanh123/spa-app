<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('frontend.layout.head')
</head>
<body>
    <div class="page-wrapper">
        @include('frontend.layout.notice')
        <header class="header">
            <div class="header-top">
                @include('frontend.header.header-top')
                <!-- End .container -->
            </div>
            <!-- End .header-top -->
            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                @include('frontend.header.header-middle')
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->
            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                @include('frontend.header.header-bottom')
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        <main class="main">
            @yield('content')
        </main>
        <!-- End .main -->
        <footer class="footer bg-dark">
            <div class="footer-middle">
                @include('frontend.footer.footer-middle')
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->
            <div class="container">
                <div class="footer-bottom">
                    @include('frontend.footer.footer-bottom')
                </div>
                <!-- End .footer-bottom -->
            </div>
            <!-- End .container -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->
    @include('frontend.mobile.mobile')
    @include('frontend.layout.script')
</body>
</html>
