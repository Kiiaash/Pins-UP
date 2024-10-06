@extends ('switches.switch')

@section('mainbody')
<h1 style="margin:15px 20px;">Edit your Job here</h1>
<form action="{{ route('edval.update',$eid->id) }}" method="POST">
    @method('put')
    @csrf
    <!-- using the route name -->
    <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job Title</label>
    <input type="text" name="jobtitle1" class="form-control-sm d-block ml-5 position-relative" 
    style="margin:15px 20px;" value="{{ $eid->job_title }}">
    @error('jobtitle1')
        <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
    @enderror
    <label class="form-label-lg d-block position-relative " style="margin:15px 20px;">Job poster</label>
    <input type="text" name="jobposter1" class="form-control-sm d-block ml-5 position-relative" 
    style="margin:15px 20px;" value="{{ $eid->job_poster }}">
    @error('jobposter1')
    <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
@enderror
    <label class="form-label-lg d-block position-relative" style="left:20px;">Description</label>
    <textarea name="jobdes1" class="form-control-lg d-block position-relative fs-6" 
    style="margin:15px 20px; width:550px;height:150px;" value="">{{ $eid->description }}</textarea>
    @error('jobdes1')
        <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
    @enderror
    <label class="form-label-lg d-block position-relative" style="left:20px;">Requierments</label>
    <textarea name="requirments1" class="form-control-lg d-block position-relative text-sm fs-6" style="margin:15px 20px;
    width:550px; height:150px;">{{ $eid->requirments }}</textarea>
    @error('requirments1')
        <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
    @enderror
    <input type="submit" name="register" value="Edit" class="btn btn-primary d-block" style="margin:15px 20px;">
</form>
@endsection