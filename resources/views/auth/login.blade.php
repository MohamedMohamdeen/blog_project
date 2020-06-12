@extends('layouts.menu')

@section('content')

 <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-5 col-lg-6 col-xl-4 px-lg-5 d-flex align-items-center">
          <div class="w-100 py-5">
            <div class="text-center"><img src="img/brand/brand-1.svg" alt="..." style="max-width: 6rem;" class="img-fluid mb-4">
              <h1 class="display-4 mb-3">Sign in</h1>
            </div>
            <form class="form-validate" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

              <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="form-group mb-4">
                <div class="row">
                  <div class="col">
                    <label for="password">Password</label>
                  </div>
                  <div class="col-auto"><a href="{{ route('password.request') }}" class="form-text small text-muted">Forgot password?</a></div>
                </div>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>
              <!-- Submit-->
              <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">Sign in</button>
              <!-- Link-->
              <p class="text-center"><small class="text-muted text-center">Don't have an account yet? <a href="{{route('register')}}">Register</a>.</small></p>
            </form>
          </div>
        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
          <!-- Image-->
          <div style="background-image: url(img/photos/victor-ene-1301123-unsplash.jpg);" class="bg-cover h-100 mr-n3"></div>
        </div>
      </div>
    </div>


<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
