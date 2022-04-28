<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
</head>
<body class="sidebar-mini layout-fixed">
@include('includes.admin.navbar')
@include('includes.admin.sidebar')

@yield('content')

@include('includes.admin.footer')

{{-- @include('sweetalert::alert') --}}
@stack('prepend-script')
@include('includes.admin.script')
@stack('addon-script')
</body>
</html>
