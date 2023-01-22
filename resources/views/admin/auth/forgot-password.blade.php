@extends('admin.auth.master')

@section('title')
    Reset Password
@endsection

@section('body')
<div class="login-form">
    <h4>Reset Password</h4>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-15">Email Password Reset Link</button>
        <div class="register-link text-center">
            <p>Back to <a href="#"> Home</a></p>
        </div>
    </form>
</div>
@endsection