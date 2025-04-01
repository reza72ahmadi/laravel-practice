<!DOCTYPE html>
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

<body>

    <form action="{{ route('store') }}" class="col-4 mx-auto" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
