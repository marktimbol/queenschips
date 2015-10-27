@extends('public.layout.auth')

@section('pageTitle', 'Login')

@section('bodyClass', 'subpage')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h2>Register</h2>

                @include('errors.form')
                
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        Name
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        Email
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        Password
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        Confirm Password
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Register</button>
                        <a href="/auth/login" class="btn btn-link">Login</a>
                    </div>
                </form>

                <p>&nbsp;</p>

            </div>
        </div>
    </div>
@endsection