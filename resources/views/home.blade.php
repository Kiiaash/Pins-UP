@extends('switches/switch')




@section('mainbody')
<div class="container shadow-md" style="width:400px; height:130px; float:right; margin:15px 20px;
background:linear-gradient(180deg,#ebebeb,#dbdbdb); border-radius:10px; box-shadow:2px 3px 5px #dbdbdb;">
    <form method="post" action="{{ route('go.search') }}">
        @csrf
        <input type="text" name="searchbar" lass="form-control-sm d-block ml-5 position-relative shadow p-3 mb-5 rounded" 
    style="margin:15px 20px; width:350px; border-radius:10px; border:none; height:40px;">
    @error('searchbar')
    <div style="margin:0px 20px; color:red; font-size:0.8rem;">{{ $message }}</div>
    @enderror
        <input type="submit" name="search" value="Search" class="btn btn-primary btn-sm mx-4">
    </form>
</div>
@foreach($posts as $post)
<a href="#">
    <div class="mid-sec">
        <div class="job-bored">
            <h6 class="mt-3">{{$post->id}}</h6>
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
            {{-- @auth
            <form method="post" action="{{ route('destroyer',$post->id) }}">
                @csrf
                @method('delete')
                <button type="submit" name="delete" class="btn btn-danger btn-sm m-10 d-block position-relative" 
                style="left:-40px; top:-60px;float: right;">X</button>
            </form>
            @endauth --}}
            <form method="GET" action="{{ route('show.show',$post->id) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm position-relative" 
                style="left:-80px; top:-60px;float: right;">View</button>
            </form>
           
        </div>
    </div>
</a>

@endforeach

<div style="position: relative; left:350px;">
    {{ $posts->links() }}
</div>
@endsection