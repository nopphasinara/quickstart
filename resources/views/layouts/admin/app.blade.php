<!doctype html>
<html class="page" lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Sign in - Control Panel</title>

  @push('head.tags')

  @endpush
  @stack('head.tags')

  @push('head.styles')
    <link href="{!! asset('css/admin.css') !!}" rel="stylesheet">
  @endpush
  @stack('head.styles')

  @push('head.scripts')

  @endpush
  @stack('head.scripts')
</head>
<body class="page-{{ $pagename }}">
  @php
    // echo '<pre>'; print_r(request()->instance()->route()->parameters()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->route()->uri()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->route()->getName()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->route()->getPrefix()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->getUriForPath('/admin')); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->allFiles()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->getHttpHost()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->getRequestUri()); echo '</pre>';
    // echo '<pre>'; print_r(request()->instance()->getClientIp()); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(request()->instance()->route())); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(request()->instance())); echo '</pre>';
    // echo '<pre>'; print_r(get_class_vars(request())); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods(request())); echo '</pre>';
  @endphp

  @yield('content')

  @push('footer.scripts')
    <!-- jQuery, Popper.js, Bootstrap core scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" crossorigin="anonymous"></script>
  @endpush
  @stack('footer.scripts')
</body>
</html>
