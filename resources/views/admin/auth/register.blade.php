@extends('admin.auth.master')

@section('title')
    Register
@endsection

@section('body')
    <div class="login-form">
        <h4>Register</h4>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Agree the terms and policy 
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
            <div class="register-link m-t-15 text-center">
                <p>Already have account ? <a href="{{ route('login') }}"> Sign in</a></p>
            </div>
        </form>
    </div>
@endsection
