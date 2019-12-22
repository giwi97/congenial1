@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class = "col-md-6">
            <h3>Sign-up</h3>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Enter your email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">Enter your name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Enter your password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Sign-up</button>
                <input type="hidden" name="token" value="{{Session::token()}}">
            </form>
        </div>
        <div class = "col-md-6">
            <h3>Sign-in</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Enter your email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Enter your password</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Sign-in</button>
                <input type="hidden" name="token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
@endsection
