@extends('auth.layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ( isset($status) )
        <div class="alert alert-success">
            {{ $status }}
        </div>
    @endif

    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="{{url('/')}}"><img alt="" src="/assets/backend/img/logo-big.png"></a>
            </div>
            <h4 class="auth-header">
                Login Form
            </h4>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error has-danger' : '' }}">
                    <label for="">Username</label>
                    <input class="form-control" name="email" value="{{ old('email') }}"
                           placeholder="Enter your username" type="email" required>

                    {{--image--}}
                    {{--<div class="pre-icon os-icon os-icon-user-male-circle"></div>--}}

                    @if ($errors->has('email'))
                        <div class="help-block form-text with-errors form-control-feedback">
                            <ul class="list-unstyled">
                                <li>{{ $errors->first('email') }}</li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error has-danger' : '' }}">
                    <label for="">Password</label>
                    <input class="form-control" name="password"
                           placeholder="Enter your password" type="password" required>
                    @if ($errors->has('password'))
                        <div class="help-block form-text with-errors form-control-feedback">
                            <ul class="list-unstyled">
                                <li>{{ $errors->first('password') }}</li>
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="buttons-w">
                    <button type="submit" class="btn btn-primary cursor_pointer">Log me in</button>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <br>
                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </form>
        </div>
    </div>
@endsection
