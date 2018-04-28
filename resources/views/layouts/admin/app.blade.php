<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Control Panel</title>

  @push('head.tags')

  @endpush
  @stack('head.tags')

  @push('head.styles')
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  @endpush
  @stack('head.styles')

  @push('head.scripts')

  @endpush
  @stack('head.scripts')
</head>
<body class="page">
  @yield('content')

  @push('footer.scripts')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js" crossorigin="anonymous"></script>
    <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      }
    });
    </script>
  @endpush
  @stack('footer.scripts')
</body>
</html>
