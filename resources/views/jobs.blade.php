@extends('switches/switch')

@section('mainbody')
<div class="mid-sec">
    <div class="job-show">
        <h6>{{ $idd->id }}</h6>
        <h4>{{ $idd->job_title }}</h4>
        <p>{{ $idd->description }}</p>
        <p>{{ $idd->requirments }}</p>
    </div>
    <div>
        <span><img src="{{asset('images/heart-empty.png')}}" width="30" height="30"></span>
        <span>{{ $idd->likes }}</span>
        <span><img src="{{ asset('images/pin1.png') }}" width="30" height="30"></span>

        <ul>
            <a href="#"><img src="{{asset('images/avatar.png')}}" width="80" height="80"></li></a>
            <span>{{ $idd->job_poster }}</span>
        </ul>
    </div>
    @auth
        <a  href="{{ route('editr.edit',$idd->id) }}" class="btn mx-3 btn-primary btn-sml mt-3 position-relative" style="left:40px;
        top:-20px; text-decoration:none; color:#fff;">EDIT</a>
   
</div>
<div style="width:700px; min-height:150px; background-color:#ebebeb; border-radius:10px;
margin:30px 95px;">
    <form action="{{ route('job.comments.store',$idd->id) }}" method="POST">
        @csrf
        <textarea name="comment" class="form-control fs-4"></textarea>
            @error('comment')
            <div style="margin:15px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
            @enderror
        <input type="submit" class="btn btn-primary btn-sm mx-1 mt-2">
    </form>
    @foreach ($idd->comments as $coms)
    <div  style="width:90%; height:150px; border-top:solid 1px #555;
    margin:10px auto;">
        <p>{{ $coms->comment}}</p>
    </div>
    @endforeach
    @endauth
</div>
@endsection