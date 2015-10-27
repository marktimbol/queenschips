@extends('public.layout.auth')

@section('pageTitle', 'Login')

@section('bodyClass', 'subpage')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h2>Login</h2>

                 @include('errors.form')

                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        Email
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        Password
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Login</button>
                        <a href="/auth/register" class="btn btn-link">Register</a>
                    </div>
                </form>

                <p>&nbsp;</p>

            </div>
        </div>
    </div>
@endsection