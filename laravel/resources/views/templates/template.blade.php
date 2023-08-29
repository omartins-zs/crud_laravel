<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud com Laravel</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-32x32.png') }}">

</head>

<body>
    @yield('content')

    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>
