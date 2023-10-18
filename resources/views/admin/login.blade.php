@extends('admin.layouts.sign')

@section('content')

    <h4 class="text-dark mb-5">Sign In</h4>
    
    <form action="/index.html">
      <div class="row">
        <div class="form-group col-md-12 mb-4">
          <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Username">
        </div>

        <div class="form-group col-md-12 ">
          <input type="password" class="form-control input-lg" id="password" placeholder="Password">
        </div>

        <div class="col-md-12">
          <div class="d-flex my-2 justify-content-between">
            <div class="d-inline-block mr-3">
              <label class="control control-checkbox">Remember me
                <input type="checkbox" />
                <div class="control-indicator"></div>
              </label>
            </div>

            <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
          </div>

          <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

          
        </div>
      </div>
    </form>
  
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
