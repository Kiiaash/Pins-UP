@extends('switches/switch')

@section('mainbody')
    <h1>this is registration</h1>
    <form action="{{ route('user.signup') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label mx-4">Name:</label> 
            <input type="text" class="form-control mx-4 w-50" name="name">
            @error('name')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Email:</label>
            <input type="email" class="form-control mx-4 w-50" name="email">
            @error('email')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
            @enderror 
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Password:</label>
            <input type="password" class="form-control mx-4 w-50" name="password">
            @error('password')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
            @enderror  
        </div>
        <div class="mb-3">
            <label class="form-label mx-4">Confirm Password:</label>
            <input type="password" class="form-control mx-4 w-50" name="password_confirmation">
            @error('conpass')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
            @enderror  
        </div>
        <input type="submit" class="btn btn-primary btn-primary-lg mx-4" name="adduser" value="Sign Up">
    </form>
@endsection