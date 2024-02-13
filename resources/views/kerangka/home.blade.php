<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
@include('layout.style')

<body>
    <!-- Left Panel -->
    @include('layout.sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
      @include('layout.navbar')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('layout.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->

    @include('layout.script')
    {{-- /Scripts --}}
</body>
</html>
