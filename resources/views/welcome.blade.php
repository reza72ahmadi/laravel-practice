<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/all.css') }}">
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('jQuery.js') }}"></script>
</head>

<body class="container">

    <h1 class="mt-2">Welcome to Laravel !</h1>
    <br>
    <span class="fas fa-heart me-1"> font awsome</span>
    <br><br>
    <button class="btn btn-info">bootstrap</button>
    <br><br>
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Javascript</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Link</a></li>
        <li><a class="dropdown-item" href="#">Another link</a></li>
        <li><a class="dropdown-item" href="#">A third link</a></li>
    </ul>
    <br>
    <h2>jQuery</h2>

    <script>
        $(document).ready(function() {
            $("h2").click(function() {
                $(this).hide();
            });
        });
    </script>
</body>

</html>
