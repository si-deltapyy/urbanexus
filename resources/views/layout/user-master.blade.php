<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
    />
    <title>
      Dashboard
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('user-asset/src/assets/img/favicon.ico') }}" />
    <link href="{{ asset('user-asset/layouts/modern-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-asset/layouts/modern-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('user-asset/layouts/modern-light-menu/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('user-asset/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-asset/layouts/modern-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-asset/layouts/modern-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('user-asset/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('user-asset/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-asset/src/assets/css/light/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('user-asset/src/assets/js/dashboard/dash_1.js') }}"></script>



<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('user-asset/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('user-asset/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />




    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- BEGIN MAIN CONTAINER -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        @include('layout.user-sidebar')

        @yield('content')

        @include('layout.user-footer')
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('user-asset/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user-asset/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('user-asset/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('user-asset/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('user-asset/layouts/modern-light-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('user-asset/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('user-asset/src/assets/js/dashboard/dash_2.js') }}"></script>
    <link href="{{ asset('user-asset/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-asset/src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('user-asset/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('user-asset/src/assets/js/scrollspyNav.js') }}"></script>


  </body>
</html>
