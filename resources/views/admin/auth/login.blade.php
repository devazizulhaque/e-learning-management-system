@extends('admin.auth.master')

@section('title')
    Login
@endsection

@section('body')
<div class="login-form">
    <h4>Administratior Login</h4>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Remember Me
            </label>
            <label class="pull-right">
                <a href="{{ route('password.request') }}">Forgotten Password?</a>
            </label>

        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
        <div class="register-link m-t-15 text-center">
            <p>Don't have account ? <a href="{{ route('register') }}"> Sign Up Here</a></p>
        </div>
    </form>
</div>
@endsection