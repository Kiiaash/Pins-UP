@extends('switches.switch')

@section('mainbody')
   
    <h1>this is the user profile</h1>
    @foreach ($posts as $post)
    <a href="#">
        <div class="mid-sec">
            <div class="job-bored">
                <h6 class="mt-3">{{$post->user_id}}</h6>
                <h4>{{$post->job_title}}</h4>
            </div>
            <div>
                <span><img src="{{asset('images/heart-empty.png')}}" width="30" height="30"></span>
                <span>{{$post->likes}}</span>
                <span><img src="{{ asset('images/pin1.png') }}" width="30" height="30"></span>
    
                <ul>
                    <a href="#"><img src="{{asset('images/avatar.png')}}" width="80" height="80"></li></a>
                    <span>{{$post->job_poster}}</span>
                </ul>
                @auth
                <form method="post" action="{{ route('destroyer',$post->user_id) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" name="delete" class="btn btn-danger btn-sm m-10 d-block position-relative" 
                    style="left:-40px; top:-60px;float: right;">X</button>
                </form>
                @endauth
                <form method="GET" action="{{ route('show.show',$post->user_id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm position-relative" 
                    style="left:-80px; top:-60px;float: right;">View</button>
                </form>
               
            </div>
        </div>
    </a>
    @endforeach
@endsection