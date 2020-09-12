@extends('layouts.auth-master')

@section('content')
<div class="card card-primary">
  <div class="card-header"><h3 style="margin: auto;padding-top: 30px;">License2Code</h3></div>

  <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Registered email address" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
        @if(App::environment('demo'))
        <small id="emailHelpBlock" class="form-text text-muted">
            Demo Email: admin@example.com
        </small>
        @endif
      </div>

      <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Password</label>
          <div class="float-right">
            <a href="{{ route('password.request') }}" class="text-small">
              Forgot Password?
            </a>
          </div>
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Your account password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
        @if(App::environment('demo'))
        <small id="passwordHelpBlock" class="form-text text-muted">
            Demo Password: 1234
        </small>
        @endif
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
          <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="margin-bottom: -30px;">
          Login
        </button>
        <div class="mt-5 text-muted text-center" style="color: #6c757d !important;">
          Don't have an account? <a href="{{ route('register') }}" style="color: #6c757d !important">Create One</a>
        </div>        
        <a href="https://login.microsoftonline.com/" class="btn btn-outline-primary btn-lg btn-block" tabindex="4" style="margin-top: 20px; color: black !important">
          Sign in with Microsoft
        </a>
      </div>
    </form>
  </div>
</div>
@endsection
