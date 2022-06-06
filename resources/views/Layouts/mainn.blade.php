<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 CRUD School Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->    
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    @include('Partials.navbar')
    @yield('content')
    @include('Partials.footer')
</div>
    
</body>
</html>