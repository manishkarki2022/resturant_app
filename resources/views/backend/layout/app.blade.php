<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/token_input_bootstrap/css/bootstrap-tokenfield.min.css')}}"  />

    <!-- Add dynamic theme color CSS -->
    <style>
        :root {
            --primary-color: {{ $siteSetting->theme_color_primary ?? '#007bff' }}; /* Default color if not set */
            --secondary-color: {{ $siteSetting->theme_color_secondary ?? '#6c757d' }}; /* Default color if not set */
        }
    </style>
{{--    <pre>{{ var_dump($siteSetting) }}</pre>--}}

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
<script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
<script  src="{{asset('adminlte/plugins/token_input_bootstrap/bootstrap-tokenfield.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Check for flashed session message and show Toastr notification
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}');
        @endif
    });
</script>
@yield('customJs')
</body>
</html>
