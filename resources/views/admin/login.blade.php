@extends('layouts.admin.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <div class="form-signin mt-5 mb-5">
          <form id="form-signin" action="{{ route('login') }}" method="POST">
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
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" autocomplete="on" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="" autocomplete="on" required>
              </div>
              <input type="hidden" name="redirect_to" value="{{ $redirect_to }}">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign me in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
