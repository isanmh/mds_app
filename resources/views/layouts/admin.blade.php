<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mitra Digital Services</title>

    {{-- css script --}}
    @include('layouts.css-script')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    {{-- Js Script --}}
    @include('layouts.footer-script')
</body>

</html>
