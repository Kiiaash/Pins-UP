@extends('switches/switch')

@section('mainbody')
    <h1 style="margin:15px 20px;">E your Job here</h1>
    
    <form action="{{ route('formvalid',Auth::user()->id) }}" method="post">
        @csrf
        <!-- using the route name -->
        <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job Title</label>
        <input type="text" name="jobtitle" class="form-control-sm d-block ml-5 position-relative" style="margin:15px 20px;">
        @error('jobtitle')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
        @enderror
        <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job poster</label>
        <input type="text" name="jobposter" class="form-control-sm d-block ml-5 position-relative" style="margin:15px 20px;">
        @error('jobposter')
        <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
        @enderror
        <label class="form-label-lg d-block position-relative" style="left:20px;">Description</label>
        <textarea name="jobdes" class="form-control-lg d-block position-relative fs-6" style="margin:15px 20px; width:550px;
        height:150px;"></textarea>
        @error('jobdes')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
        @enderror
        <label class="form-label-lg d-block position-relative" style="left:20px;">Requierments</label>
        <textarea name="requirments" class="form-control-lg d-block position-relative text-sm fs-6" style="margin:15px 20px;
        width:550px; height:150px;"></textarea>
        @error('requirments')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
        @enderror
        <input type="submit" name="register" value="add" class="btn btn-primary d-block" style="margin:15px 20px;">
    </form>
@endsection