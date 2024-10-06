@extends('switches/switch')

@section('mainbody') 

    <h1>the is the login section</h1>
    <form action="{{ route('get.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label mx-4">Email:</label>
            <input type="email" class="form-control mx-4 w-50" name="email">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Password:</label>
            <input type="password" class="form-control mx-4 w-50" name="password">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror  
        </div>
        <input type="submit" class="btn btn-primary btn-primary-lg mx-4" name="adduser" value="Login">
    </form>
@endsection