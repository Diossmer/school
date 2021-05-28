<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('include.head')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div id="app">
        <div class="wrapper">
            <div class="header">
                @yield('navbar')
            </div>
            <div class="aside">
                @yield('sidebar')
            </div>
            <div class="container">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
            <div class="control-sidebar">
                @yield('aside')
            </div>
            <div class="footer">
                @yield('footer')
            </div>
        </div>
    </div>
    @include('include.script')
</body>
</html>