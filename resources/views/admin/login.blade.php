@extends('admin.layouts.sign')

@section('content')
    <div class="container">

        <h4 class="text-dark mb-5">Sign In</h4>

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-12 ">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                        <div class="d-inline-block mr-3">
                            <label class="control control-checkbox">Remember me
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>


                </div>
            </div>
        </form>

    </div>
@endsection
