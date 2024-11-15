<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('backend.layout.navbar')

    <!-- Sidebar -->
    @include('backend.layout.sidebar')

    <!-- Content Wrapper -->
        <section class="content">
            @yield('content')
        </section>

    <!-- Footer -->
    @include('backend.layout.footer')

</div>

<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
