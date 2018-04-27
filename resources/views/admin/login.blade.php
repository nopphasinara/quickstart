@extends('layouts.admin.app')

@section('content')
  <div class="form-signin">
    <form id="form-signin" action="{{ route('admin.login') }}" method="POST" autocomplete="on">
      {{ csrf_field() }}
      <div class="logo text-center mb-2">
        <img src="{{ asset('img/logo.png') }}" alt="Control Panel" width="75%" height="auto">
      </div>
      <h1 class="h3 font-weight-light text-center mb-4">Please sign in</h1>
      @if ($errors->all())
        <div class="alert alert-danger">
          <ul class="my-0">
            @foreach ($errors->all() as $index => $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="form-body border rounded px-4 py-4">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="row">
          <div class="col">
            <label for="password">Password</label>
          </div>
          <div class="col-auto">
            <a href="{{ route('password.reset', csrf_token()) }}">Forgot password?</a>
          </div>
        </div>
        <div class="form-group">
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group form-check">
          <label>
            <input class="form-check-input" id="remember" name="remember" type="checkbox" value="true"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign me in</button>
      </div>
    </form>
  </div>
@endsection
