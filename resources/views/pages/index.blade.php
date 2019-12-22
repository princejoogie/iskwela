@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to iSkwela!</h1>
        <p>This is a laravel application</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    
        <div class="active-purple-4 mb-4">
            <input class="form-control" type="text" placeholder="Search Job" aria-label="Search">
        </div>
    </div>
@endsection