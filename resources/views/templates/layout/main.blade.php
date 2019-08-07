<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cleibert Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <script rel="stylesheet" href="{{ asset('js/app.js') }}"></script>
</body>
</html>