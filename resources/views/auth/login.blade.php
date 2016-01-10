@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row col-md-offset-4">
        <h3>Login to Stream Blog</h3>
    </div>
    <div class="row col-md-4 col-md-offset-4">
        <form action="{{ route('do.login') }}" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Login</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </div>
</div>
@stop