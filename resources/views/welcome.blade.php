<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>
<body>
<div class="container">
    <h1>Welcome to carwash "NEMO"</h1>
    <a href="{{ route('404') }}">Under Construction</a><br>
    <a href="{{ route('services.index') }}">Services</a><br>
    <a href="{{ route('services.create') }}">Add Service</a>
</div>
</body>
</html>
