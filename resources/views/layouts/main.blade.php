<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Signin Template for Bootstrap</title>

  <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
</head>
<body class="page">
  @include('frontend.partials.navbar')

  @yield('content')

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="{!! asset('js/vendor/holder.js') !!}" crossorigin="anonymous"></script>
</body>
</html>
